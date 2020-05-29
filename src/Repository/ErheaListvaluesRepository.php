<?php

namespace App\Repository;

use App\Entity\ErheaListvalues;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method ErheaListvalues|null find($id, $lockMode = null, $lockVersion = null)
 * @method ErheaListvalues|null findOneBy(array $criteria, array $orderBy = null)
 * @method ErheaListvalues[]    findAll()
 * @method ErheaListvalues[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ErheaListvaluesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ErheaListvalues::class);
    }

    public function getLabels(){
        $conn = $this->getEntityManager()->getConnection();
        $sql = 'SELECT id, label FROM erhea_listvalues where codelang = "fr_FR"';
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    // /**
    //  * @return ErheaListvalues[] Returns an array of ErheaListvalues objects
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
    public function findOneBySomeField($value): ?ErheaListvalues
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
