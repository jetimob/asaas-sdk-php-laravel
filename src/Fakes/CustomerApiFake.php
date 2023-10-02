<?php

namespace Jetimob\Asaas\Fakes;

use Jetimob\Asaas\Api\Customer\CreateCustomerResponse;
use Jetimob\Asaas\Api\Customer\FindCustomerResponse;
use Jetimob\Asaas\Contracts\CustomerApiInterface;
use Jetimob\Asaas\Entity\Customer\Customer;

class CustomerApiFake implements CustomerApiInterface
{
    public function create(Customer $customer): CreateCustomerResponse
    {
        return new CreateCustomerResponse();
    }

    public function find(string $id): FindCustomerResponse
    {
        return new FindCustomerResponse();
    }
}