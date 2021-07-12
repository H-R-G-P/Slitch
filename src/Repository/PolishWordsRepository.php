<?php

namespace App\Repository;

use App\Entity\PolishWords;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PolishWords|null find($id, $lockMode = null, $lockVersion = null)
 * @method PolishWords|null findOneBy(array $criteria, array $orderBy = null)
 * @method PolishWords[]    findAll()
 * @method PolishWords[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PolishWordsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PolishWords::class);
    }

    // /**
    //  * @return PolishWords[] Returns an array of PolishWords objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?PolishWords
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
