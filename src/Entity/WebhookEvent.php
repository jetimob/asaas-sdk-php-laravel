<?php

namespace Jetimob\Asaas\Entity;

use Jetimob\Http\Traits\Serializable;

abstract class WebhookEvent
{
    use Serializable;

    protected string $event;

    abstract public function getEvent();

    abstract public function getData();
}
