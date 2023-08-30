<?php

namespace Jetimob\Asaas\Entity\Webhook;

use Jetimob\Asaas\Entity\WebhookEvent;

class TransferWebhookEvent extends WebhookEvent
{
    protected TransferWebhookEventData $transfer;

    public function getEvent(): ?TransferEvent
    {
        return TransferEvent::tryFrom($this->event);
    }

    public function getData(): TransferWebhookEventData
    {
        return $this->transfer;
    }
}
