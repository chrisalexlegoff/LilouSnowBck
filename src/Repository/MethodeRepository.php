<?php

namespace App\Repository;

use App\Entity\Methode;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Methode>
 *
 * @method Methode|null find($id, $lockMode = null, $lockVersion = null)
 * @method Methode|null findOneBy(array $criteria, array $orderBy = null)
 * @method Methode[]    findAll()
 * @method Methode[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MethodeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Methode::class);
    }

//    /**
//     * @return Methode[] Returns an array of Methode objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('m.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Methode
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
