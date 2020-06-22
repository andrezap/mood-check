<?php

declare(strict_types=1);

namespace App\Domain\Mood\Repository;

use App\Domain\Mood\Model\MoodRegister;

interface MoodRegisterRepositoryInterface
{
    public function store(MoodRegister $cart) : void;
}