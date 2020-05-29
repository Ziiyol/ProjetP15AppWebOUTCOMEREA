<?php

namespace App\Controller;

use phpDocumentor\Reflection\Type;
use phpDocumentor\Reflection\Types\This;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\ErheaEvodata;
use Symfony\Component\Validator\Constraints\Choice;

class   EvoGraphController extends AbstractController
{
    private $idPat; // Identifiant du patient
    /**
     * @Route("/evo/graph/{idPat}", name="evo_graph")
     * Reçois une requête et un ID de patient
     */
    public function index(Request $request, $idPat)
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


        $this->idPat = $idPat;
        $defaultData = ['dataChosen' => []];
        $form = $this->createFormBuilder($defaultData)
            ->add('dataChosen', ChoiceType::class, [
                'choices' => [
                   // 'intubation' => "intubation",
                    'minTemp' => "minTemp",
                    'maxTemp' => "maxTemp",
                    'minfc' => "minfc",
                    'maxfc' => "maxfc",
                    'freqresp' => "freqresp"
                ],
                'multiple' => true,
                'expanded' => true,
                'label' => "Données à afficher",
            ])
            ->add('Effacer', ResetType::class) //A FAIRE FONCTIONNER
            ->add('Envoyer', SubmitType::class)
            ->getForm();

        $form->handleRequest($request);

        $dataChosen = [];
        if ($form->isSubmitted() && $form->isValid()) {
            // data is an array with "datachosen"
            $data = $form->getData();
            $dataChosen = $data['dataChosen'];
        }

        // ... render the form
        return $this->render('evo_graph/index.html.twig', [
            'controller_name' => 'EvoGraphController',
            'idPat' => $idPat,
            'dates' => $this->getDates(),
            'data' => $this->data($dataChosen),
            'tabSelectedColumns' => $dataChosen,
            'nbColumns' => $this->countColumns($dataChosen),
            'form'=> $form->createView(),

        ]);
    }

    // récupère toutes les dates de visites d'un patient et les renvoies dans un tableau
    private function getDates(){
        $dates = $this->getDoctrine()->getRepository(ErheaEvodata::class)->dataForColumn($this->idPat, "dtdonnevo");
        return $dates;
    }

    // renvoie toutes les informations d'un patient donné pour chaque paramètres sous forme d'un tableau dur a étudier puis
    // trie le tableau avec une fonction prévue à cet effet
    private function data($dataChosen){
            $res = [];
            foreach ($dataChosen as $data){
                $res[] = $this->getDoctrine()->getRepository(ErheaEvodata::class)->dataForColumn($this->idPat, $data);
            }
            if(isset($res)){
                return $this->sortData($res);
            }
        return [[]];
    }

    // compte le nombre de paramètres du patient ayant étés choisis
    private function countColumns($dataChosen){
        $res = [];
        $nb = 0;
        foreach ($this->data($dataChosen) as $things){
            $nb+=1;
            $res[] = $nb;
        }
        return $res;
    }

    // trie les donnés qui étaient sous la forme d'un tableau
    // sous une autre forme de façon à ce qu'elles soient utilisables plus facilement
    private function sortData($res){
        $colonnes = [];
        foreach ($res as $columns){
            $jours = [];
            foreach ($columns as $tabData){
                foreach ($tabData as $data){
                    $jours[] = $data;
                }
            }
            array_push($colonnes, $jours);
        }
        return $colonnes;
    }

}
