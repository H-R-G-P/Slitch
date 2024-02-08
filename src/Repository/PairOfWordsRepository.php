<?php

namespace App\Repository;

use App\Entity\PairOfWords;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PairOfWords|null find($id, $lockMode = null, $lockVersion = null)
 * @method PairOfWords|null findOneBy(array $criteria, array $orderBy = null)
 * @method PairOfWords[]    findAll()
 * @method PairOfWords[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 *
 * @template PairOfWords
 * @extends ServiceEntityRepository<PairOfWords::class>
 */
class PairOfWordsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PairOfWords::class);
    }

    // /**
    //  * @return PairOfWords[] Returns an array of PairOfWords objects
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
    public function findOneBySomeField($value): ?PairOfWords
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
