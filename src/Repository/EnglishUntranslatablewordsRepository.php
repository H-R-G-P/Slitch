<?php

namespace App\Repository;

use App\Entity\EnglishUntranslatablewords;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method EnglishUntranslatablewords|null find($id, $lockMode = null, $lockVersion = null)
 * @method EnglishUntranslatablewords|null findOneBy(array $criteria, array $orderBy = null)
 * @method EnglishUntranslatablewords[]    findAll()
 * @method EnglishUntranslatablewords[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EnglishUntranslatablewordsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EnglishUntranslatablewords::class);
    }

    // /**
    //  * @return EnglishUntranslatablewords[] Returns an array of EnglishUntranslatablewords objects
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
    public function findOneBySomeField($value): ?EnglishUntranslatablewords
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
