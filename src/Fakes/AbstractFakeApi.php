<?php

declare(strict_types=1);

namespace Jetimob\Asaas\Fakes;

use Illuminate\Support\Collection;
use Jetimob\Asaas\Api\EntityResponse;
use Jetimob\Asaas\Entity\Entity;

/**
 * @property EntityResponse[] $entities
*/
class AbstractFakeApi
{
    protected string $token = 'default-token';

    protected Collection $entities;

    public function __construct()
    {
        $this->entities = new Collection();
    }

    public function usingToken(string $token): self
    {
        $this->token = $token;
        return $this;
    }

    public function getToken(): string
    {
        return $this->token;
    }

    public function getEntities(): Collection
    {
        return $this->entities;
    }

    public function getLastEntity(): ?EntityResponse
    {
        return $this->getEntities()->last();
    }
}
