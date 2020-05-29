<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use App\Entity\User;
use App\Repository\UserRepository;
use App\Form\RegistrationType;
use App\Form\ResetPasswordType;
use App\Form\AddAccountType;
use App\Form\EditUserType;
use App\Form\DeleteUserType;
use App\Form\ChoosePasswordType;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Csrf\TokenGenerator\TokenGeneratorInterface;
use Symfony\Contracts\Translation\TranslatorInterface;

class SecurityController extends AbstractController
{

/**
*@Route("/deconnexion", name="security_logout")
*/
public function logout(){}

  /**
  *@Route("/administrateur", name="security_account")
  */

  public function ajouterCompte(Request $request, EntityManagerInterface $manager, \Swift_Mailer $mailer, TokenGeneratorInterface $tokenGenerator)
  {

    $securityContext = $this->container->get('security.authorization_checker');
    if (!$securityContext->isGranted('IS_AUTHENTICATED_FULLY'))
    {
      return $this->redirectToRoute('app_login');
    }


    $roleUser = json_encode($this->getUser()->getRole(), true);

    if($roleUser != '["ROLE_ADMIN"]')
    {
      return $this->redirectToRoute('base_selection');
    }


    $user = new User();
    // On crée le formulaire
      $form = $this->createForm(AddAccountType::class, $user);


      $form->handleRequest($request);
      if($form->isSubmitted() && $form->isValid())
      {

        $token = $tokenGenerator->generateToken();
        $user->setActivationToken($token);
        $url = $this->generateUrl('app_choose_password', ['token' => $token],UrlGeneratorInterface::ABSOLUTE_URL);
        $manager->persist($user);
        $manager->flush();







        $message = (new \Swift_Message('Mot de passe oublié'))
        ->setFrom('enzogi@hotmail.fr')
        ->setTo('enzogi@hotmail.fr')
        ->setBody(
            "<p>Bonjour,</p><p>Une demande de création de compte a été  effectué, veuillez cliquer sur le lien pour définir un mot de passe : " . $url .'</p>',
            'text/html'
            )
        ;

        // On envoie l'e-mail

        $mailer->send($message);


        return $this->redirectToRoute('listeUsers');
      }



      return $this->render('security/gestionUtilisateur.html.twig', ['form' => $form->createView() ]);


  }

/**
*
* @Route("/password-account/{token}", name="app_choose_password")
*/
  public function choosePassword($token, Request $request, UserPasswordEncoderInterface $passwordEncoder){

    $effectiveDate = strtotime("+3 months", strtotime(date("Y-m-d")));
    $dateExpiration= date("Y/m/d", $effectiveDate);
    $dateExpiration = new \DateTime($dateExpiration);


    // On cherche l'utilisateur avec le token fourni
      $user = $this->getDoctrine()->getRepository(User::class)->findOneBy(['activation_token' => $token]);


      if(!$user){
          $this->addFlash('danger', 'Token inconnu');
          return $this->redirectToRoute('app_login');
      }

      // Si le formulaire est envoyé en méthode POST
      if($request->isMethod('POST') && preg_match('#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W)#', $request->request->get('password'))){




          // On supprime le token
          $user->setActivationToken(null);
          $user->setDateModification(new \DateTime());
          $user->setDateExpiration($dateExpiration);

          // On chiffre le mot de passe
          $user->setPassword($passwordEncoder->encodePassword($user, $request->request->get('password')));
          $entityManager = $this->getDoctrine()->getManager();
          $entityManager->persist($user);
          $entityManager->flush();

          $this->addFlash('message', 'Mot de passe modifié avec succès');

          return $this->redirectToRoute('app_login');
      }
      else
      {
          return $this->render('security/choosePassword.html.twig', ['token' => $token]);
      }


  }





  /**
  * @Route("/modifier-motdepasse", name="app_remove_password")
  */
   public function reinitaliserMotdepasse( Request $request, UserRepository $userRepo, \Swift_Mailer $mailer, TokenGeneratorInterface $tokenGenerator)
   {
     $form = $this->createForm(ResetPasswordType::class);
     $form->handleRequest($request);
     if($form->isSubmitted() && $form->isValid()){

       $email = $form->get("mail")->getData();

        $user = $userRepo->findOneBymail($email);


       if(!$user)
       {
         $this->addFlash('danger', "cette adresse n'est pas enregistrer");
         $this->redirectToRoute('app_login');
       }

       else
       {
         $token = $tokenGenerator->generateToken();
         try{
                 $user->setActivationToken($token);
                 $entityManager = $this->getDoctrine()->getManager();
                 $entityManager->persist($user);
                 $entityManager->flush();
             }catch(\Exception $e){
                 $this->addFlash('warning', 'Une erreur est survenue : '. $e->getMessage());
                 return $this->redirectToRoute('app_login');
             }

             $url = $this->generateUrl('app_reset_password', ['token' => $token],UrlGeneratorInterface::ABSOLUTE_URL);


             $message = (new \Swift_Message('Mot de passe oublié'))
             ->setFrom('votre@adresse.fr')
             ->setTo($user->getMail())
             ->setBody(
                 "<p>Bonjour,</p><p>Une demande de réinitialisation de mot de passe a été effectuée. Veuillez cliquer sur le lien suivant : " . $url .'</p>',
                 'text/html'
                 )
             ;

             // On envoie l'e-mail
             $mailer->send($message);

             // On crée le message flash
             $this->addFlash('message', 'Un e-mail de réinitialisation de mot de passe vous a été envoyé');



          return $this->redirectToRoute('app_login');
       }

      }
      return $this->render('security/resetpassword.html.twig', ['resetForm' => $form->createView()]);
    }










   /**
   * @Route("/reset-pass/{token}", name="app_reset_password")
   */
   public function resetPassword($token, Request $request, UserPasswordEncoderInterface $passwordEncoder){


        // On cherche l'utilisateur avec le token fourni
        $user = $this->getDoctrine()->getRepository(User::class)->findOneBy(['activation_token' => $token]);
        $effectiveDate = strtotime("+3 months", strtotime(date("Y-m-d")));
        $dateExpiration= date("Y/m/d", $effectiveDate);
        $dateExpiration = new \DateTime($dateExpiration);

        if(!$user){
            $this->addFlash('danger', 'Token inconnu');
            return $this->redirectToRoute('app_login');
        }

        // Si le formulaire est envoyé en méthode POST
        if($request->isMethod('POST') && preg_match('#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W)#', $request->request->get('password'))){
          var_dump('hello');
            // On supprime le token
            $user->setActivationToken(null);
            $user->setDateModification(new \DateTime());
            $user->setDateExpiration($dateExpiration);

            // On chiffre le mot de passe

            $user->setActivationToken(null);
            $user->setDateModification(new \DateTime());
            $user->setDateExpiration($dateExpiration);
            $user->setPassword($passwordEncoder->encodePassword($user, $request->request->get('password')));
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

            $this->addFlash('message', 'Mot de passe modifié avec succès');

            return $this->redirectToRoute('app_login');



            return $this->render('security/resetpass.html.twig', ['token' => $token]);

        }
        else
        {
          $result='<div class="alert alert-danger">Votre mot de passe doit contenir une majuscule, une minuscule un chiffre et un charactère spécial au minimum</div>';
            return $this->render('security/resetpass.html.twig', ['token' => $token]);
        }

    }







  /**
  *
  * @Route("administrateur/utilisateurs", name="listeUsers")
  */

  public function usersList(UserRepository $user)
  {

    $securityContext = $this->container->get('security.authorization_checker');
    if (!$securityContext->isGranted('IS_AUTHENTICATED_FULLY'))
    {
      return $this->redirectToRoute('app_login');
    }


    $roleUser = json_encode($this->getUser()->getRole(), true);

    if($roleUser != '["ROLE_ADMIN"]')
    {
      return $this->redirectToRoute('base_selection');
    }


    return $this->render('security/listeUtilisateur.html.twig', [
        "user" => $user->findAll()
    ]);

  }

  /**
  *
  * @Route("administrateur/utilisateurs/modifier/{id}", name="listUsers")
  * @ParamConverter("listUsers", options={"mapping": {"id" : "id"}})
  */
  public function editUser(User $user, Request $request)
  {

    $securityContext = $this->container->get('security.authorization_checker');
    if (!$securityContext->isGranted('IS_AUTHENTICATED_FULLY'))
    {
      return $this->redirectToRoute('app_login');
    }


    $roleUser = json_encode($this->getUser()->getRole(), true);

    if($roleUser != '["ROLE_ADMIN"]')
    {
      return $this->redirectToRoute('base_selection');
    }


    $form = $this->createForm(EditUserType::class, $user);
    $form->handleRequest($request);

    if($form->isSubmitted() && $form->isValid())
    {
      $entityManager = $this->getDoctrine()->getManager();
      $entityManager->persist($user);
      $entityManager->flush();

      $this->addFlash('message', 'Utilisateur modifé avec succés');
      return $this->redirectToRoute('listeUsers');

    }
    return $this->render('security/edituser.html.twig', [
      'userForm' => $form->createView()
    ]);
  }





  /**
  *
  * @Route("administrateur/utilisateurs/supprimer/{id}", name="deleteusers")
  * @ParamConverter("deleteusers", options={"mapping": {"id" : "id"}})
  */
  public function deleteUser(User $user, Request $request)
  {

    $securityContext = $this->container->get('security.authorization_checker');
    if (!$securityContext->isGranted('IS_AUTHENTICATED_FULLY'))
    {
      return $this->redirectToRoute('app_login');
    }




    $form = $this->createForm(DeleteUserType::class, $user);
    $form->handleRequest($request);

    if($form->isSubmitted() && $form->isValid())
    {
      $entityManager = $this->getDoctrine()->getManager();
      $entityManager->remove($user);
      $entityManager->flush();

      $this->addFlash('message', 'Utilisateur supprimé avec succés');
      return $this->redirectToRoute('listeUsers');

    }
    return $this->render('security/deleteuser.html.twig', [
      'deleteForm' => $form->createView()
    ]);
  }

  /**
   * @Route("/login", name="app_login")
   */
  public function login(AuthenticationUtils $authenticationUtils): Response
  {
      // if ($this->getUser()) {
      //     return $this->redirectToRoute('target_path');
      // }

      // get the login error if there is one
      $error = $authenticationUtils->getLastAuthenticationError();
      // last username entered by the user
      $lastUsername = $authenticationUtils->getLastUsername();


      return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
  }




}
