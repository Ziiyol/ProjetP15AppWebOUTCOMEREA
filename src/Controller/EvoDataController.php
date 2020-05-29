<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\ErheaEvodata;

class EvoDataController extends AbstractController
{
    private $isPatFound = false;

    /**
     * @Route("/evo/data", name="evo_data")
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

    
        return $this->render('evo_data/index.html.twig', [
            'controller_name' => 'EvoDataController',
            'idPat' => $this->getIdPatients(),
            'isPatFound' => $this->isPatFound,
            'allIDPat' => $this->nope(),
        ]);
    }

    private function nope(){
        $res = [];
        $rowData = $this->getDoctrine()->getRepository(ErheaEvodata::class)->getAllID();
        foreach ($rowData as $value){
            $id = array_values($value)[0];

            if (!in_array($id, $res)){
                $res[] = $id;
            }
        }
        return $res;
    }

    public function getIdPatients(){

        if (isset($_POST["idPat"]) && $_POST["idPat"] != ""){
            $dayPat= $this
                ->getDoctrine()
                ->getRepository(ErheaEvodata::class)
                ->searchID($_POST["idPat"]);

            if (isset($dayPat[0]['idvisit'])){
                $this->isPatFound = true;
                return $dayPat[0]['idvisit'];

            }else{
                $this->isPatFound = false;
                return "Entrez l'id d'un patient valide";

            }
        }
        return "Entrez l'id d'un patient";
    }

}
