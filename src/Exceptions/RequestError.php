<?php

declare(strict_types=1);

namespace Jetimob\Asaas\Exceptions;

use Jetimob\Asaas\Entity\Entity;

class RequestError extends Entity
{
    protected string $code;

    protected string $description;

    public function getCode(): string
    {
        return $this->code;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}
