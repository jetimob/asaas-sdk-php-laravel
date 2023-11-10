<?php

namespace Jetimob\Asaas\Entity\Webhook;

use Jetimob\Asaas\Entity\WebhookEvent;

class AccountStatusWebhookEvent extends WebhookEvent
{
    protected AccountStatusEventData $accountStatus;

    public function getEvent(): ?AccountStatusEvent
    {
        return AccountStatusEvent::tryFrom($this->event);
    }

    public function getData(): AccountStatusEventData
    {
        return $this->accountStatus;
    }
}
