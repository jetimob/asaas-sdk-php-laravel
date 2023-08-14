<?php

namespace Jetimob\Asaas\Tests\Feature\Api;

use Jetimob\Asaas\Api\Customer\CustomerApi;
use Jetimob\Asaas\Api\Customer\CustomerResponse;
use Jetimob\Asaas\Api\Customer\DeleteCustomerResponse;
use Jetimob\Asaas\Api\Customer\FindCustomerResponse;
use Jetimob\Asaas\Entity\Customer;
use Jetimob\Asaas\Facades\Asaas;
use Jetimob\Asaas\Tests\AbstractTestCase;

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
            ->setCpfCnpj('841.460.850-71');
    }

    /** @test */
    public function shouldCreateCustomerSuccessfully(): string
    {
        $this->markTestSkipped('todo: Verificar limite de criação de 100 customers');
        $response = $this->api->create($this->customer);

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertInstanceOf(CustomerResponse::class, $response);

        return $response->getId();
    }

    /**
//     * @depends shouldCreateCustomerSuccessfully
     * @test
     */
    public function shouldFindCustomerByIdSuccessfully(): void
    {
        $response = $this->api->find(self::DEFAULT_CUSTOMER_ID);

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertInstanceOf(FindCustomerResponse::class, $response);
    }

    /**
//     * @depends shouldCreateCustomerSuccessfully
     * @test
     */
    public function shouldUpdateCustomerSuccessFully()
    {
        $newName = 'novo-nome';
        $this->customer->setName($newName);

        $response = $this->api->update(self::DEFAULT_CUSTOMER_ID, $this->customer);

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertEquals($newName, $response->getName());
    }

    /**
//     * @depends shouldCreateCustomerSuccessfully
     * @test
     */
    public function shouldDeleteCustomerSuccessfully()
    {
        $response = $this->api->delete(self::DEFAULT_CUSTOMER_ID);

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertTrue($response->isDeleted());
        $this->assertInstanceOf(DeleteCustomerResponse::class, $response);
    }
}