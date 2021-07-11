<?php

namespace App\Repository;

use App\Entity\EnglishWords;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method EnglishWords|null find($id, $lockMode = null, $lockVersion = null)
 * @method EnglishWords|null findOneBy(array $criteria, array $orderBy = null)
 * @method EnglishWords[]    findAll()
 * @method EnglishWords[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EnglishWordsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EnglishWords::class);
    }

    // /**
    //  * @return EnglishWords[] Returns an array of EnglishWords objects
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
    public function findOneBySomeField($value): ?EnglishWords
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
