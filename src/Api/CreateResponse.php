<?php

namespace Jetimob\Asaas\Api;

use Jetimob\Http\Response;

class CreateResponse extends Response
{
    /**
     * Entidade criada
     * (ex: 'account', 'customer', 'charging')
     *
     * @var $object string
    */
    protected string $object;

    /**
     * id retornado
     *
     * @var $id string
     */
    protected string $id;

    public function getObject(): string
    {
        return $this->object;
    }

    public function getId(): string
    {
        return $this->id;
    }
}
