<?php

namespace Jetimob\Asaas\Contracts;

use Jetimob\Asaas\Api\Customer\CreateCustomerResponse;
use Jetimob\Asaas\Api\Customer\FindCustomerResponse;
use Jetimob\Asaas\Entity\Customer\Customer;

interface CustomerApiInterface
{
    public function create(Customer $customer): CreateCustomerResponse;

    public function find(string $id): FindCustomerResponse;
}