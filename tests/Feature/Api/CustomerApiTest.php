<?php

namespace Jetimob\Asaas\Tests\Feature\Api;

use Jetimob\Asaas\Api\AbstractApi;
use Jetimob\Asaas\Api\Customer\CustomerResponse;
use Jetimob\Asaas\Api\Customer\DeleteCustomerResponse;
use Jetimob\Asaas\Api\Customer\FindCustomerResponse;
use Jetimob\Asaas\Entity\Customer;
use Jetimob\Asaas\Facades\Asaas;
use Jetimob\Asaas\Tests\AbstractTestCase;

class CustomerApiTest extends AbstractTestCase
{
    protected AbstractApi $api;
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
        $response = $this->api->create($this->customer);

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertInstanceOf(CustomerResponse::class, $response);

        return $response->getId();
    }

    /**
     * @depends shouldCreateCustomerSuccessfully
     * @test
     */
    public function shouldFindCustomerByIdSuccessfully(string $id): void
    {
        $response = $this->api->find($id);

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertInstanceOf(FindCustomerResponse::class, $response);
    }

    /**
     * @depends shouldCreateCustomerSuccessfully
     * @test
     */
    public function shouldUpdateCustomerSuccessFully(string $id)
    {
        $newName = 'novo-nome';
        $this->customer->setName($newName);

        $response = $this->api->update($id, $this->customer);

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertEquals($newName, $response->getName());
    }

    /**
     * @depends shouldCreateCustomerSuccessfully
     * @test
     */
    public function shouldDeleteCustomerSuccessfully(string $id)
    {
        $response = $this->api->delete($id);

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertTrue($response->isDeleted());
        $this->assertInstanceOf(DeleteCustomerResponse::class, $response);
    }
}