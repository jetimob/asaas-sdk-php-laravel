<?php

namespace Jetimob\Asaas\Tests;

use Jetimob\Asaas\Api\Customer\CreateCustomerResponse;
use Jetimob\Asaas\AsaasServiceProvider;
use Jetimob\Asaas\Entity\BillingType;
use Jetimob\Asaas\Entity\Customer;
use Jetimob\Asaas\Facades\Asaas;
use Orchestra\Testbench\TestCase;

class AbstractTestCase extends TestCase
{
    /** @inheritDoc */
    public function getPackageProviders($app): array
    {
        return [AsaasServiceProvider::class];
    }

    protected function createCustomer(): CreateCustomerResponse
    {
        $api = Asaas::customer();
        $customer = (new Customer())
            ->setName(fake()->name)
            ->setEmail(fake()->safeEmail)
            ->setCpfCnpj('711.672.230-04');

        return $api->create($customer);
    }

    protected function getRandomBillingType(): BillingType
    {
        return fake()->randomElement(BillingType::class);
    }
}
