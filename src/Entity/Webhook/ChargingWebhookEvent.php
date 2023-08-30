<?php

namespace Jetimob\Asaas\Entity\Webhook;

use Jetimob\Asaas\Entity\WebhookEvent;

class ChargingWebhookEvent extends WebhookEvent
{
    protected ChargingWebhookEventData $payment;

    public function getEvent(): ?ChargingEvent
    {
        return ChargingEvent::tryFrom($this->event);
    }

    public function getData(): ChargingWebhookEventData
    {
        return $this->payment;
    }
}
