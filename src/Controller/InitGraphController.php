<?php

namespace App\Controller;


use App\Entity\ErheaInitdata;
use App\Entity\ErheaListvalues;
use phpDocumentor\Reflection\Types\This;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class InitGraphController extends AbstractController
{

    private $nbColumns = 0;

    private $dictTot = [[]];
    private $dataIndex = [];

    /**
     * @Route("/init/graph", name="init_graph")
     */
    public function index(Request $request)
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


        $defaultData = ['dataChosen' => []];
        $form = $this->createFormBuilder($defaultData)
            ->add('dataChosen', ChoiceType::class, [
                'choices' => [
                    // nom => id
                    'Age' => "agepat",
                    'Sexe' => "sexepat",
                    'Poids' => "poidspat",
                    'Taille' => "taillepat",
                    'Symptôme principal' => "sympprinc"
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

        // APPEL DE LA FONCTION GET DICT POUR TOUT METTRE DANS UN DICTIONNAIRE
        $this->getDict($dataChosen);

        foreach ($this->dictTot as $diffData){
            array_push($this->dataIndex, array_keys($diffData));
        }

        return $this->render('init_graph/index.html.twig', [
            'form'=> $form->createView(),

            'dictTot' => $this->dictTot,
            'dictIndex' => $this->dataIndex,

            'tabSelectedColumns' => $dataChosen,
            'nbColumns' => $this->nbColumns,

            //V=== SERT SI AFFICHAGE DYNAMIQUE, SINON NON (PAS RETIRER POUR L'INSTANT)
            'columns' => $this->getColumns(),
            'labelsSymp'=>$this->researchLabelsSymp(),
            'labelsSympSize'=>$this->getSizeArray($this->researchLabelsSymp()),


        ]);
    }



    //renvoi un tableau de toutes les colonnes de la table Erhea_initdata
    private function getColumns(){
        $columns = $this->getDoctrine()->getRepository(ErheaInitdata::class)->getColumns();
        $res = [];
        foreach ($columns as $name){
            $res[] = $name['Field'];
        }
        return $res;
    }

    private function getDict($dataChosen){

        $res = [];

        foreach ($dataChosen as $data){
            $res[] = $this->getDoctrine()->getRepository(ErheaInitdata::class)->getInfFromColumn($data);
        }

        if(isset($res)){

            $this->countColumns($res);  //compter le nombre de graphique à étudiers

            //recupère toutes les informations et les tries dans un format
            //plus facile tout en enlevant les valeurs nulles
            $colonnes = [];
            foreach ($res as $columns){  //pour chaques données différentes
                $jours = [];
                foreach ($columns as $tabData){  //sortir toutes les données
                    foreach ($tabData as $data){  //nécéssité car mysql renvoi un tableau de trop (dans notre cas)
                        if ($data != null && $data!=0){  //si la variable existe //TODO: CHANGER POUR AUTRE QUE != 0
                            $jours[] = $data;  //l'ajouter dans l'ordre dans un nouveau tableau
                        }
                    }
                }
                array_push($colonnes, $jours);  //ajouter le tableau dans l'ordre pour la donnée
            }

            //insère les valeurs dans un dictionnaire
            $dictTot = [];
            foreach ($colonnes as $dataN){ //pour chaques données différentes
                $dict = [];
                foreach ($dataN as $info){ //regarder toutes les données
                    if (in_array($info, array_keys($dict))){  //si il y a deja qulqu'un avec la meme valeur
                        $dict[$info] += 1;  //incrémenter de une personne l'index correspondant
                    }else{
                        $dict += [ $info => 1 ]; // si pas trouvé, créer un nouvel index avec une personne à l'intérieur
                    }
                }
                ksort($dict);
                array_push($dictTot, $dict);
            }

            $this->dictTot = $dictTot;
        }
    }


    //sert a determiner le nombre de graphiques à afficher ainsi que le nombre de colonnes a étudier
    private function countColumns($dataChosen){
        $res = [];
        $nb = 0;
        foreach ($dataChosen as $things){
            $nb+=1;
            $res[] = $nb;
        }
        $this->nbColumns = $res;
    }
    /*
     * Fonction de recherche, à mettre dans une boucle
     */
    private function researchLabelsSymp(){
        $labels = $this->getDoctrine()->getRepository(ErheaListvalues::class)->getLabels();
        return $labels;
    }

    private function getSizeArray($array){
        return sizeof($array);
    }
}