<?php

namespace Jetimob\Asaas\Entity\Webhook;

use Jetimob\Http\Traits\Serializable;

abstract class WebhookEventData
{
    use Serializable;

    protected ?string $object = null;
    protected ?string $id = null;

    public function getObject(): ?string
    {
        return $this->object;
    }

    public function getId(): ?string
    {
        return $this->id;
    }
}