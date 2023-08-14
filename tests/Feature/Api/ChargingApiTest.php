<?php

namespace Jetimob\Asaas\Tests\Feature\Api;

use Jetimob\Asaas\Api\AbstractApi;
use Jetimob\Asaas\Api\Charging\CreateChargingResponse;
use Jetimob\Asaas\Api\Customer\CreateCustomerResponse;
use Jetimob\Asaas\Entity\BillingType;
use Jetimob\Asaas\Entity\Charging;
use Jetimob\Asaas\Entity\Customer;
use Jetimob\Asaas\Facades\Asaas;
use Jetimob\Asaas\Tests\AbstractTestCase;

class ChargingApiTest extends AbstractTestCase
{
    protected AbstractApi $api;
    protected Charging $charging;
    protected CreateCustomerResponse $customer;

    protected function setUp(): void
    {
        parent::setUp();
        $this->customer = $this->createCustomer();
        $this->api = Asaas::charging();
        $this->charging = (new Charging())
            ->setCustomer($this->customer->getId())
            ->setValue(fake()->randomFloat(0, 5.0, 50.0))
            ->setDueDate(now()->addMonth()->format('Y-m-d'))
            ->setBillingType($this->getRandomBillingType())
        ;
    }

    /** @test */
    public function shouldCreateChargingSuccessfully(): void
    {
        $response = $this->api->create($this->charging);

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertInstanceOf(CreateChargingResponse::class, $response);
    }
}