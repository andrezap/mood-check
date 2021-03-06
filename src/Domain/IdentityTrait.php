<?php

declare(strict_types=1);

namespace App\Domain;

use App\Identity;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;

trait IdentityTrait
{
    /** @var UuidInterface */
    private $uuid;

    private function __construct(UuidInterface $uuid)
    {
        $this->uuid = $uuid;
    }

    public static function generate(): self
    {
        return new self(Uuid::uuid4());
    }

    public function equals(Identity $other): bool
    {
        return $other instanceof self && $this->uuid->equals($other->uuid);
    }

    public static function fromString(string $uuid): self
    {
        return new self(Uuid::fromString($uuid));
    }

    public function asString(): string
    {
        return $this->uuid->toString();
    }

    public function __toString(): string
    {
        return $this->uuid->toString();
    }
}
