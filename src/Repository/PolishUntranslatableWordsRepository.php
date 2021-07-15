<?php


namespace App\Repository;

use App\Entity\PolishUntranslatableWords;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PolishUntranslatableWords|null find($id, $lockMode = null, $lockVersion = null)
 * @method PolishUntranslatableWords|null findOneBy(array $criteria, array $orderBy = null)
 * @method PolishUntranslatableWords[]    findAll()
 * @method PolishUntranslatableWords[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PolishUntranslatableWordsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PolishUntranslatableWords::class);
    }

    // /**
    //  * @return PolishUntranslatableWords[] Returns an array of PolishUntranslatableWords objects
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
    public function findOneBySomeField($value): ?PolishUntranslatableWords
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