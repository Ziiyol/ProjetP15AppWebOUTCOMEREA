<?php

namespace App\Repository;

use App\Entity\ErheaInitdata;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method ErheaInitdata|null find($id, $lockMode = null, $lockVersion = null)
 * @method ErheaInitdata|null findOneBy(array $criteria, array $orderBy = null)
 * @method ErheaInitdata[]    findAll()
 * @method ErheaInitdata[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ErheaInitdataRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ErheaInitdata::class);
    }

    public function getColumns(){
        $conn = $this->getEntityManager()->getConnection();
        $sql ='SHOW COLUMNS FROM erhea_initdata';
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function getInfFromColumn($columnName){
        $conn = $this->getEntityManager()->getConnection();
        $sql ='select '.$columnName.' FROM erhea_initdata';
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }







    public function getIdPatient($column){
        $conn = $this->getEntityManager()->getConnection();
        $sql ='SELECT DISTINCT :column from erhea_initdata';
        $stmt = $conn->prepare($sql);
        $stmt->execute(['column'=>$column]);

        return $stmt->fetchAll();

    }


    // /**
    //  * @return ErheaInitdata[] Returns an array of ErheaInitdata objects
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
    public function findOneBySomeField($value): ?ErheaInitdata
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
