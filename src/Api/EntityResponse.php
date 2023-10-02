<?php

namespace Jetimob\Asaas\Api;

use Jetimob\Http\Response;

class EntityResponse extends Response
{
    protected ?string $object;

    protected ?string $id;

    public function getObject(): ?string
    {
        return $this->object;
    }

    public function getId(): ?string
    {
        return $this->id;
    }
}
