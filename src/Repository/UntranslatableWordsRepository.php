<?php

namespace App\Repository;

use App\Entity\UntranslatableWords;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method UntranslatableWords|null find($id, $lockMode = null, $lockVersion = null)
 * @method UntranslatableWords|null findOneBy(array $criteria, array $orderBy = null)
 * @method UntranslatableWords[]    findAll()
 * @method UntranslatableWords[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 *
 * @template UntranslatableWords
 * @extends ServiceEntityRepository<UntranslatableWords::class>
 */
class UntranslatableWordsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UntranslatableWords::class);
    }

    // /**
    //  * @return UntranslatableWords[] Returns an array of UntranslatableWords objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?UntranslatableWords
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
