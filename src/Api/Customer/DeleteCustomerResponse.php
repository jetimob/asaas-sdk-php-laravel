<?php

namespace Jetimob\Asaas\Api\Customer;

use Jetimob\Http\Response;

class DeleteCustomerResponse extends Response
{
    /** @var $deleted bool */
    protected bool $deleted;

    /** @var $id string */
    protected string $id;

    public function isDeleted(): bool
    {
        return $this->deleted;
    }

    public function getId(): bool
    {
        return $this->getId();
    }
}