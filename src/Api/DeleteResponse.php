<?php

namespace Jetimob\Asaas\Api;

use Jetimob\Http\Response;

abstract class DeleteResponse extends Response
{
    protected ?bool $deleted;

    protected ?string $id;

    public function isDeleted(): ?bool
    {
        return $this->deleted;
    }

    public function getId(): ?string
    {
        return $this->id;
    }
}
