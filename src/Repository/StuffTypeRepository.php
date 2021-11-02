<?php

namespace App\Repository;

use App\Entity\StuffType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method StuffType|null find($id, $lockMode = null, $lockVersion = null)
 * @method StuffType|null findOneBy(array $criteria, array $orderBy = null)
 * @method StuffType[]    findAll()
 * @method StuffType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 *
 * @template StuffType
 * @extends ServiceEntityRepository<StuffType::class>
 */
class StuffTypeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, StuffType::class);
    }

    // /**
    //  * @return StuffType[] Returns an array of StuffType objects
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
    public function findOneBySomeField($value): ?StuffType
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
