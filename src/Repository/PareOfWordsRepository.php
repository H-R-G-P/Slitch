<?php

namespace App\Repository;

use App\Entity\PareOfWords;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PareOfWords|null find($id, $lockMode = null, $lockVersion = null)
 * @method PareOfWords|null findOneBy(array $criteria, array $orderBy = null)
 * @method PareOfWords[]    findAll()
 * @method PareOfWords[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 *
 * @template PareOfWords
 * @extends ServiceEntityRepository<PareOfWords::class>
 */
class PareOfWordsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PareOfWords::class);
    }

    // /**
    //  * @return PareOfWords[] Returns an array of PareOfWords objects
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
    public function findOneBySomeField($value): ?PareOfWords
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
