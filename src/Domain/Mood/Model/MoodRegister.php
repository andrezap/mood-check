<?php

declare(strict_types=1);

namespace App\Domain\Mood\Model;

use App\Domain\User\Model\User;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;

class MoodRegister
{
    private UuidInterface $id;

    private Mood $mood;

    private \DateTimeInterface $registerDate;

    private User $user;

    public function __construct(Mood $mood, User $user)
    {
        $this->id = Uuid::uuid4();
        $this->mood = $mood;
        $this->user = $user;
    }

}