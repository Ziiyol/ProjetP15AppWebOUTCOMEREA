<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class InitDataController extends AbstractController
{
    /**
     * @Route("/init/data", name="init_data")
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


        return $this->render('init_data/index.html.twig', [
            'controller_name' => 'InitDataController',

        ]);
    }
}
