<?php

namespace Jetimob\Asaas\Api\Customer;

use GuzzleHttp\RequestOptions;
use Jetimob\Asaas\Api\AbstractApi;
use Jetimob\Asaas\Entity\Customer;

class CustomerApi extends AbstractApi
{
    public function create(Customer $customer): CreateCustomerResponse
    {
        return $this->mappedPost('customers', CreateCustomerResponse::class, [
            RequestOptions::JSON => $customer,
        ]);
    }

    public function find(string $id): FindCustomerResponse
    {
        return $this->mappedGet("customers/$id", FindCustomerResponse::class);
    }

    public function update(string $id, Customer $customer): FindCustomerResponse
    {
        return $this->mappedPost("customers/$id", FindCustomerResponse::class, [
            RequestOptions::JSON => $customer,
        ]);
    }

    public function delete(string $id): DeleteCustomerResponse
    {
        return $this->mappedRequest(
            'delete',
            "customers/$id",
            DeleteCustomerResponse::class,
            []
        );
    }
}