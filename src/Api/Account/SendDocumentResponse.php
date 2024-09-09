<?php

namespace Jetimob\Asaas\Api\Account;

use Jetimob\Http\Response;

class SendDocumentResponse extends Response
{
    protected ?string $id = null;

    protected ?string $status = null;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }
}
