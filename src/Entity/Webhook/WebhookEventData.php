<?php

namespace Jetimob\Asaas\Entity\Webhook;

use Jetimob\Http\Traits\Serializable;

abstract class WebhookEventData
{
    use Serializable;

    protected string $object;
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