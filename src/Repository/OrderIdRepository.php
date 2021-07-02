<?php

namespace App\Repository;

use App\Entity\OrderId;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method OrderId|null find($id, $lockMode = null, $lockVersion = null)
 * @method OrderId|null findOneBy(array $criteria, array $orderBy = null)
 * @method OrderId[]    findAll()
 * @method OrderId[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OrderIdRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, OrderId::class);
    }

    // /**
    //  * @return OrderId[] Returns an array of OrderId objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('o.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?OrderId
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
