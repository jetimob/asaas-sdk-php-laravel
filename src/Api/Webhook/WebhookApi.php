<?php

namespace Jetimob\Asaas\Api\Webhook;

use GuzzleHttp\RequestOptions;
use Jetimob\Asaas\Api\AbstractApi;
use Jetimob\Asaas\Entity\Webhook\WebhookConfiguration;

class WebhookApi extends AbstractApi
{
    public function charging(WebhookConfiguration $configuration): WebhookConfigurationResponse
    {
        return $this->mappedPost('webhook', WebhookConfigurationResponse::class, [
            RequestOptions::JSON => $configuration,
        ]);
    }

    public function transfer(WebhookConfiguration $configuration): WebhookConfigurationResponse
    {
        return $this->mappedPost('webhook/transfer', WebhookConfigurationResponse::class, [
            RequestOptions::JSON => $configuration,
        ]);
    }
}
