<?php

namespace Jetimob\Asaas\Entity;

use Jetimob\Asaas\Entity\Webhook\WebhookEventData;
use Jetimob\Http\Traits\Serializable;

abstract class WebhookEvent implements \JsonSerializable
{
    use Serializable;

    protected ?string $event;

    abstract public function getEvent();

    abstract public function getData(): WebhookEventData;
}
