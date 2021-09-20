<?php

namespace App\Repository;

use App\Entity\Stuff;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Stuff|null find($id, $lockMode = null, $lockVersion = null)
 * @method Stuff|null findOneBy(array $criteria, array $orderBy = null)
 * @method Stuff[]    findAll()
 * @method Stuff[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StuffRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Stuff::class);
    }

    // /**
    //  * @return Stuff[] Returns an array of Stuff objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Stuff
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
