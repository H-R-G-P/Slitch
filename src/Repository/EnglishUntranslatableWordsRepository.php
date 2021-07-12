<?php

namespace App\Repository;

use App\Entity\EnglishUntranslatableWords;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method EnglishUntranslatableWords|null find($id, $lockMode = null, $lockVersion = null)
 * @method EnglishUntranslatableWords|null findOneBy(array $criteria, array $orderBy = null)
 * @method EnglishUntranslatableWords[]    findAll()
 * @method EnglishUntranslatableWords[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EnglishUntranslatableWordsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EnglishUntranslatableWords::class);
    }

    // /**
    //  * @return EnglishUntranslatableWords[] Returns an array of EnglishUntranslatableWords objects
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
    public function findOneBySomeField($value): ?EnglishUntranslatableWords
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
