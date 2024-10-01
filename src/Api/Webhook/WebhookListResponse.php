<?php

namespace Jetimob\Asaas\Api\Webhook;

use Jetimob\Asaas\Api\EntityResponse;
use Jetimob\Asaas\Entity\Webhook\WebhookConfiguration;

class WebhookListResponse extends EntityResponse
{
    protected ?array $data;

    public function dataItemType(): string
    {
        return WebhookConfiguration::class;
    }

    /** @return WebhookConfiguration[]|null */
    public function getData(): ?array
    {
        return $this->data;
    }
}
