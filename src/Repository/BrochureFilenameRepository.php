<?php

namespace App\Repository;

use App\Entity\BrochureFilename;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<BrochureFilename>
 *
 * @method BrochureFilename|null find($id, $lockMode = null, $lockVersion = null)
 * @method BrochureFilename|null findOneBy(array $criteria, array $orderBy = null)
 * @method BrochureFilename[]    findAll()
 * @method BrochureFilename[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BrochureFilenameRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BrochureFilename::class);
    }

    public function add(BrochureFilename $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(BrochureFilename $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return BrochureFilename[] Returns an array of BrochureFilename objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('b.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?BrochureFilename
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
