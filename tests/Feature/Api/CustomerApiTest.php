<?php

namespace Jetimob\Asaas\Tests\Feature\Api;

use Jetimob\Asaas\Api\Customer\FindCustomerResponse;
use Jetimob\Asaas\Api\Customer\CustomerApi;
use Jetimob\Asaas\Api\Customer\CustomerResponse;
use Jetimob\Asaas\Api\Customer\DeleteCustomerResponse;
use Jetimob\Asaas\Entity\Customer\Customer;
use Jetimob\Asaas\Entity\Customer\TokenizeCreditCardInfo;
use Jetimob\Asaas\Facades\Asaas;
use Jetimob\Asaas\Tests\AbstractTestCase;
use PHPUnit\Framework\Attributes\Depends;
use PHPUnit\Framework\Attributes\Test;

class CustomerApiTest extends AbstractTestCase
{
    protected CustomerApi $api;
    protected Customer $customer;

    protected function setUp(): void
    {
        parent::setUp();
        $this->api = Asaas::customer();
        $this->customer = (new Customer())
            ->setName(fake()->name)
            ->setEmail(fake()->safeEmail)
            ->setCpfCnpj(self::fakeCpf());
    }

    #[Test]
    public function shouldCreateCustomerSuccessfully(): string
    {
        $response = $this->api->create($this->customer);

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertInstanceOf(CustomerResponse::class, $response);

        return $response->getId();
    }

    #[Test, Depends('shouldCreateCustomerSuccessfully')]
    public function shouldTokenizeCreditCardSuccessfully(string $id): void
    {
        $info = TokenizeCreditCardInfo::forCustomer($id)
            ->setCreditCard($this->fakeCreditCard())
            ->setCreditCardHolderInfo($this->fakeCreditCardHolder())
            ->setRemoteIp(fake()->ipv6);

        $response = $this->api->tokenizeCreditCard($info);

        $this->assertSame(200, $response->getStatusCode());
    }

    #[Test, Depends('shouldCreateCustomerSuccessfully')]
    public function shouldFindCustomerByIdSuccessfully(string $id): void
    {
        $response = $this->api->find($id);

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertInstanceOf(FindCustomerResponse::class, $response);
    }

    #[Test, Depends('shouldCreateCustomerSuccessfully')]
    public function shouldUpdateCustomerSuccessFully(string $id): void
    {
        $newName = fake()->name;
        $this->customer->setName($newName);

        $response = $this->api->update($id, $this->customer);

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertEquals($newName, $response->getName());
    }

    #[Test, Depends('shouldCreateCustomerSuccessfully')]
    public function shouldDeleteCustomerSuccessfully(string $id): void
    {
        $response = $this->api->delete($id);

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertTrue($response->isDeleted());
        $this->assertInstanceOf(DeleteCustomerResponse::class, $response);
    }
}