<?php

namespace App\Repository;

use App\Entity\ErheaEvodata ;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method ErheaEvodata|null find($id, $lockMode = null, $lockVersion = null)
 * @method ErheaEvodata|null findOneBy(array $criteria, array $orderBy = null)
 * @method ErheaEvodata[]    findAll()
 * @method ErheaEvodata[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ErheaEvodataRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ErheaEvodata::class);
    }

    public function searchID($id){
        $conn = $this->getEntityManager()->getConnection();
        $sqlForEvodata ='SELECT DISTINCT idvisit from erhea_evodata where idvisit = :idPat';

        //Tableau de valeurs du patient pour la table EvoData
        $stmtForEvodata = $conn->prepare($sqlForEvodata);
        $stmtForEvodata->execute(['idPat'=>$id]);
        $resForEvodata =$stmtForEvodata->fetchAll();

        return $resForEvodata;
    }

    public function getAllID(){
        $conn = $this->getEntityManager()->getConnection();
        $sqlForEvodata ='SELECT idvisit from erhea_evodata';

        //Tableau de valeurs du patient pour la table EvoData
        $stmtForEvodata = $conn->prepare($sqlForEvodata);
        $stmtForEvodata->execute();
        $resForEvodata = $stmtForEvodata->fetchAll();

        return $resForEvodata;
    }

    public function getColomns(){
        $conn = $this->getEntityManager()->getConnection();
        $sql ='SHOW COLUMNS FROM erhea_evodata';
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function dataForColumn($id, $column){
        $conn = $this->getEntityManager()->getConnection();
        $sqlForEvodata = "SELECT ".$column." from erhea_evodata where idvisit = ".$id;

        //Tableau de valeurs du patient pour la table EvoData
        $stmtForEvodata = $conn->prepare($sqlForEvodata);
        $stmtForEvodata->execute();
        $resForEvodata =$stmtForEvodata->fetchAll();

        return $resForEvodata;
    }





    public function getIdPatient(){
        $conn = $this->getEntityManager()->getConnection();
        $sql ='SELECT DISTINCT idpatient from erhea_evodata';
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();

    }

    public function getInfoPatient($pat){
        // Connexion à la bdd et initialisation des requêtes sql
        $conn = $this->getEntityManager()->getConnection();
        $sqlForEvodata ='SELECT DISTINCT * from erhea_evodata where idpatient = :idPat';

        //Tableau de valeurs du patient pour la table EvoData
        $stmtForEvodata = $conn->prepare($sqlForEvodata);
        $stmtForEvodata->execute(['idPat'=>$pat]);
        $resForEvodata =$stmtForEvodata->fetchAll();


        return $resForEvodata;
    }



    public function getNbJourHospitalisationPat($pat){
        $conn = $this->getEntityManager()->getConnection();
        $sql ='SELECT count(numjour) as time from erhea_evodata group by idpatient having idpatient = :idPat';
        $stmt = $conn->prepare($sql);
        $stmt->execute(['idPat'=>$pat]);

        return $stmt->fetchAll();
    }

    public function getAllDateForPatient($pat){
        $conn = $this->getEntityManager()->getConnection();
        $sql ='SELECT  numjour from erhea_evodata where idpatient = :idPat';
        $stmt = $conn->prepare($sql);
        $stmt->execute(['idPat'=>$pat]);

        return $stmt->fetchAll();
    }

    public function getChosenDataForPatient($pat,$dataChosen){
        $conn = $this->getEntityManager()->getConnection();
        $sql ='SELECT  :dataChosen from erhea_evodata where idpatient = :idPat';
        $stmt = $conn->prepare($sql);
        $stmt->execute(['dataChosen' => $dataChosen,'idPat'=>$pat]);

        return $stmt->fetchAll();
    }


    // /**
    //  * @return ErheaEvodata[] Returns an array of ErheaEvodata objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ErheaEvodata
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
