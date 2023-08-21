<?php

namespace Jetimob\Asaas\Tests\Feature\Api;

use Jetimob\Asaas\Api\Account\AccountApi;
use Jetimob\Asaas\Api\Account\AccountBalanceResponse;
use Jetimob\Asaas\Api\Account\CreateAccountResponse;
use Jetimob\Asaas\Api\Account\FindAccountResponse;
use Jetimob\Asaas\Entity\Account\Account;
use Jetimob\Asaas\Facades\Asaas;
use Jetimob\Asaas\Tests\AbstractTestCase;

class AccountApiTest extends AbstractTestCase
{
    protected AccountApi $api;
    protected Account $account;

    protected function setUp(): void
    {
        parent::setUp();
        $this->api = Asaas::account();
    }

    /** @test */
    public function shouldCreateAccountSuccessfully(): CreateAccountResponse
    {
        $response = $this->createAccount();

        $this->assertSame(200, $response->getStatusCode());
        $this->assertInstanceOf(CreateAccountResponse::class, $response);

        return $response;
    }

    /**
     * @depends shouldCreateAccountSuccessfully
     * @test
    */
    public function shouldFindAccountSuccessfully(CreateAccountResponse $createAccountResponse): void
    {
        $response = $this->api->find($createAccountResponse->getId());

        $this->assertSame(200, $response->getStatusCode());
        $this->assertInstanceOf(FindAccountResponse::class, $response);
    }

    /** @test */
    public function shouldGetBalanceSuccessfully()
    {
        $response = $this->api->balance();

        $this->assertSame(200, $response->getStatusCode());
        $this->assertInstanceOf(AccountBalanceResponse::class, $response);
    }

    /**
     * @depends shouldCreateAccountSuccessfully
     * @test
     */
    public function shouldGetBalanceOfSubAccountSuccessfully(CreateAccountResponse $createAccountResponse)
    {
        $response = $this
            ->api
            ->usingToken($createAccountResponse->getApiKey())
            ->balance();

        $this->assertSame(200, $response->getStatusCode());
        $this->assertInstanceOf(AccountBalanceResponse::class, $response);
        // A conta foi criada agora então ela deve estar com o saldo = 0
        $this->assertEquals(0, $response->getBalance());
    }

    /** @test */
    public function shouldGetSplitsBalanceSucessfully(): void
    {
        $response = $this->api->splitsStatistics();

        $this->assertSame(200, $response->getStatusCode());
    }

    /**
     * @depends shouldCreateAccountSuccessfully
     * @test
    */
    public function shouldGetSplitsBalanceOfSubAccountSucessfully(CreateAccountResponse $createAccountResponse): void
    {
        $response = $this->api->usingToken($createAccountResponse->getApiKey())->splitsStatistics();

        $this->assertSame(200, $response->getStatusCode());
    }
}
