<?php

namespace Jetimob\Asaas\Tests\Feature\Api;

use Jetimob\Asaas\Api\Account\AccountResponse;
use Jetimob\Asaas\Api\Account\CreateAccountResponse;
use Jetimob\Asaas\Api\Webhook\WebhookApi;
use Jetimob\Asaas\Api\Webhook\WebhookConfigurationResponse;
use Jetimob\Asaas\Entity\Webhook\WebhookConfiguration;
use Jetimob\Asaas\Facades\Asaas;
use Jetimob\Asaas\Tests\AbstractTestCase;
use PHPUnit\Framework\Attributes\Depends;
use PHPUnit\Framework\Attributes\Test;

class WebhookApiTest extends AbstractTestCase
{
    protected WebhookApi $api;
    protected WebhookConfiguration $configuration;
    protected const HOOK_URL = 'https://google.com';

    protected function setUp(): void
    {
        parent::setUp();
        $this->api = Asaas::webhook();
        $this->configuration = (new WebhookConfiguration())
            ->setUrl(self::HOOK_URL)
            ->setEmail('oliveiragabriel.dev@gmail.com')
            ->setEnabled(true)
            ->setApiVersion(3)
            ->setAuthToken('auth-token')
            ->setInterrupted(false);
    }

    #[Test]
    public function shouldActivateChargingWebhook(): CreateAccountResponse
    {
        $account = $this->createAccount();

        $response = $this->api
            ->usingToken($account->getApiKey())
            ->charging($this->configuration);

        $this->assertSame(200, $response->getStatusCode());
        $this->assertTrue($response->isEnabled());
        $this->assertFalse($response->isInterrupted());
        $this->assertEquals(self::HOOK_URL, $response->getUrl());
        $this->assertInstanceOf(WebhookConfigurationResponse::class, $response);

        return $account;
    }

    #[Test, Depends('shouldActivateChargingWebhook')]
    public function shouldDisableChargingWebhook(CreateAccountResponse $account): void
    {
        $this->configuration->setEnabled(false);

        $response = $this->api
            ->usingToken($account->getApiKey())
            ->charging($this->configuration);

        $this->assertSame(200, $response->getStatusCode());
        $this->assertFalse($response->isEnabled());
        $this->assertFalse($response->isInterrupted());
        $this->assertEquals(self::HOOK_URL, $response->getUrl());
        $this->assertInstanceOf(WebhookConfigurationResponse::class, $response);
    }

    #[Test]
    public function shouldActivateTransferWebhook(): CreateAccountResponse
    {
        $account = $this->createAccount();

        $response = $this->api
            ->usingToken($account->getApiKey())
            ->transfer($this->configuration);

        $this->assertSame(200, $response->getStatusCode());
        $this->assertTrue($response->isEnabled());
        $this->assertFalse($response->isInterrupted());
        $this->assertEquals(self::HOOK_URL, $response->getUrl());
        $this->assertInstanceOf(WebhookConfigurationResponse::class, $response);

        return $account;
    }

    #[Test, Depends('shouldActivateChargingWebhook')]
    public function shouldDisableTransferWebhook(CreateAccountResponse $account): void
    {
        $this->configuration->setEnabled(false);

        $response = $this->api
            ->usingToken($account->getApiKey())
            ->charging($this->configuration);

        $this->assertSame(200, $response->getStatusCode());
        $this->assertFalse($response->isEnabled());
        $this->assertFalse($response->isInterrupted());
        $this->assertEquals(self::HOOK_URL, $response->getUrl());
        $this->assertInstanceOf(WebhookConfigurationResponse::class, $response);
    }
}
