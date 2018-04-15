<?php

namespace App\Repository;

use App\Entity\Company;
use App\Entity\Members;
use App\Entity\Users;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method CompanyAccount|null find($id, $lockMode = null, $lockVersion = null)
 * @method CompanyAccount|null findOneBy(array $criteria, array $orderBy = null)
 * @method CompanyAccount[]    findAll()
 * @method CompanyAccount[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CompanyAccountRepository extends ServiceEntityRepository
{
    protected $memberEm;
    protected $userEm;
    
    public function __construct(RegistryInterface $registry)
    {
        $this->memberEm = $registry->getManagerForClass(Members::class);
        $this->userEm = $registry->getManagerForClass(Users::class);
        parent::__construct($registry, Company::class);
    }

//    /**
//     * @return CompanyAccount[] Returns an array of CompanyAccount objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CompanyAccount
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
