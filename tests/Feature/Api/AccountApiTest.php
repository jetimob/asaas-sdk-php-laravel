<?php

namespace Jetimob\Asaas\Tests\Feature\Api;

use Jetimob\Asaas\Api\Account\AccountApi;
use Jetimob\Asaas\Api\Account\AccountBalanceResponse;
use Jetimob\Asaas\Api\Account\CreateAccountResponse;
use Jetimob\Asaas\Api\Account\FindAccountResponse;
use Jetimob\Asaas\Entity\Account;
use Jetimob\Asaas\Exceptions\AsaasRequestException;
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
        $this->account = (new Account())
            ->setName(fake()->name)
            ->setCpfCnpj($this->generateRandomCpf())
            ->setBirthDate(now()->subYears(40))
            ->setEmail(fake()->email)
            ->setPostalCode(self::FAKE_POSTAL_CODE);
    }

    /** @test */
    public function shouldBirthDateRequiredWhenCpfGiven(): void
    {
        $this->expectException(AsaasRequestException::class);

        $this->account->setCpfCnpj(self::FAKE_CPF);

        $resposne = $this->api->create($this->account);

        $this->assertSame(400, $resposne->getStatusCode());
    }

    /** @test */
    public function shouldCreateAccountSuccessfully(): CreateAccountResponse
    {
        $response = $this->api->create($this->account);

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
}
