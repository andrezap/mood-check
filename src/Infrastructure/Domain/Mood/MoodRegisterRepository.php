<?php

declare(strict_types=1);

namespace App\Infrastructure\Domain\Mood;

use App\Domain\Mood\Model\MoodRegister;
use App\Domain\Mood\Repository\MoodRegisterRepositoryInterface;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

final class MoodRegisterRepository extends ServiceEntityRepository implements MoodRegisterRepositoryInterface
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MoodRegister::class);
    }

    public function store(MoodRegister $cart) : void
    {
        $this->getEntityManager()->persist($cart);
        $this->getEntityManager()->flush();
    }

}