<?php

namespace Jetimob\Asaas\Tests\Feature\Api;

use Illuminate\Http\Testing\File;
use Jetimob\Asaas\Api\Account\AccountApi;
use Jetimob\Asaas\Api\Account\AccountBalanceResponse;
use Jetimob\Asaas\Api\Account\CreateAccountResponse;
use Jetimob\Asaas\Api\Account\FindAccountResponse;
use Jetimob\Asaas\Entity\Account\InvoiceCustomization;
use Jetimob\Asaas\Facades\Asaas;
use Jetimob\Asaas\Tests\AbstractTestCase;
use PHPUnit\Framework\Attributes\Depends;
use PHPUnit\Framework\Attributes\Test;

class AccountApiTest extends AbstractTestCase
{
    protected AccountApi $api;

    protected function setUp(): void
    {
        parent::setUp();
        $this->api = Asaas::account();
    }

    #[Test]
    public function shouldCreateAccountSuccessfully(): CreateAccountResponse
    {
        $response = $this->createAccount();

        $this->assertSame(200, $response->getStatusCode());
        $this->assertInstanceOf(CreateAccountResponse::class, $response);

        return $response;
    }

    #[Test, Depends('shouldCreateAccountSuccessfully')]
    public function shouldFindAccountSuccessfully(CreateAccountResponse $createAccountResponse): void
    {
        $response = $this->api->find($createAccountResponse->getId());

        $this->assertSame(200, $response->getStatusCode());
        $this->assertInstanceOf(FindAccountResponse::class, $response);
    }

    #[Test]
    public function shouldGetBalanceSuccessfully()
    {
        $response = $this->api->balance();

        $this->assertSame(200, $response->getStatusCode());
        $this->assertInstanceOf(AccountBalanceResponse::class, $response);
    }

    #[Test, Depends('shouldCreateAccountSuccessfully')]
    public function shouldGetBalanceOfSubAccountSuccessfully(CreateAccountResponse $createAccountResponse)
    {
         $response = $this->api->usingToken($createAccountResponse->getApiKey())->balance();

        $this->assertSame(200, $response->getStatusCode());
        $this->assertInstanceOf(AccountBalanceResponse::class, $response);
        // A conta foi criada agora então ela deve estar com o saldo = 0
        $this->assertEquals(0, $response->getBalance());
    }

    #[Test]
    public function shouldGetSplitsBalanceSucessfully(): void
    {
        $response = $this->api->splitsStatistics();

        $this->assertSame(200, $response->getStatusCode());
    }

    #[Test, Depends('shouldCreateAccountSuccessfully')]
    public function shouldGetSplitsBalanceOfSubAccountSucessfully(CreateAccountResponse $createAccountResponse): void
    {
        $response = $this->api->usingToken($createAccountResponse->getApiKey())->splitsStatistics();

        $this->assertSame(200, $response->getStatusCode());
    }

    #[Test, Depends('shouldCreateAccountSuccessfully')]
    public function shoulCustomizeInvoiceSuccessfully(CreateAccountResponse $createAccountResponse): void
    {
        $logo = File::image(fake()->image, 50, 50);

        $customization = (new InvoiceCustomization())
            ->setEnabled(true)
            ->setFontColor('#00ff00') // Não foi usado "fake()->hexColor()", porque na asaas tem uma validação de visibilidade da fatura
            ->setInfoBackgroundColor('#000000')
            ->setLogoBackgroundColor('#ff0000')
            ->setLogoFile($logo->getContent());

        $response = $this->api->customizeInvoice($customization);

        $this->assertSame(200, $response->getStatusCode());
    }
}
