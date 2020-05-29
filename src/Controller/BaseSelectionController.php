<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BaseSelectionController extends AbstractController
{
    /**
     * @Route("/base/selection", name="base_selection")
     */
    public function index()
    {

   	$securityContext = $this->container->get('security.authorization_checker');
    if (!$securityContext->isGranted('IS_AUTHENTICATED_FULLY'))
    {
      return $this->redirectToRoute('app_login');
    }
    $expiration =  $this->getUser()->getDateExpiration();
    $datedujour = new \DateTime();

    if($datedujour > $expiration) //on test si le mot de passe de l'utilisateur courant est expiré
    {
      return $this->redirectToRoute('app_remove_password');


    }
        return $this->render('base_selection/index.html.twig', [
            'controller_name' => 'BaseSelectionController',
        ]);
    }
}
