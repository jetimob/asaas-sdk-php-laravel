<?php

namespace Jetimob\Asaas\Api\Webhook;

use Jetimob\Asaas\Api\EntityResponse;

class WebhookConfigurationResponse extends EntityResponse
{
    /**
     * @var string $url
     */
    protected string $url;

    /**
     * @var string $email
     */
    protected string $email;

    /**
     * @var bool $enabled
     */
    protected bool $enabled;

    /**
     * @var bool $interrupted
     */
    protected bool $interrupted;

    /**
     * @var int $apiVersion
     */
    protected int $apiVersion;

    /**
     * @var string $authToken
     */
    protected string $authToken;

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setUrl(string $url): WebhookConfigurationResponse
    {
        $this->url = $url;
        return $this;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): WebhookConfigurationResponse
    {
        $this->email = $email;
        return $this;
    }

    public function isEnabled(): bool
    {
        return $this->enabled;
    }

    public function setEnabled(bool $enabled): WebhookConfigurationResponse
    {
        $this->enabled = $enabled;
        return $this;
    }

    public function isInterrupted(): bool
    {
        return $this->interrupted;
    }

    public function setInterrupted(bool $interrupted): WebhookConfigurationResponse
    {
        $this->interrupted = $interrupted;
        return $this;
    }

    public function getApiVersion(): int
    {
        return $this->apiVersion;
    }

    public function setApiVersion(int $apiVersion): WebhookConfigurationResponse
    {
        $this->apiVersion = $apiVersion;
        return $this;
    }

    public function getAuthToken(): string
    {
        return $this->authToken;
    }

    public function setAuthToken(string $authToken): WebhookConfigurationResponse
    {
        $this->authToken = $authToken;
        return $this;
    }
}
