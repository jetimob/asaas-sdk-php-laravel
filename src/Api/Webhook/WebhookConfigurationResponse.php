<?php

namespace Jetimob\Asaas\Api\Webhook;

use Jetimob\Asaas\Api\EntityResponse;

class WebhookConfigurationResponse extends EntityResponse
{
    protected ?string $url;

    protected ?string $email;

    protected ?bool $enabled;

    protected ?bool $interrupted;

    protected ?int $apiVersion;

    protected ?string $authToken;

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function isEnabled(): ?bool
    {
        return $this->enabled;
    }

    public function isInterrupted(): ?bool
    {
        return $this->interrupted;
    }

    public function getApiVersion(): int
    {
        return $this->apiVersion;
    }

    public function getAuthToken(): string
    {
        return $this->authToken;
    }
}
