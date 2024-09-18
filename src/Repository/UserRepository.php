<?php

namespace App\Repository;

use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<User>
 */
class UserRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, User::class);
    }
    public function countByGender(): array
    {
        return $this->createQueryBuilder('u')
            ->select('u.gender, COUNT(u.id) as count')
            ->groupBy('u.gender')
            ->getQuery()
            ->getResult();
    }
}