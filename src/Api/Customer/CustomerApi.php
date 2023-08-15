<?php

namespace Jetimob\Asaas\Api\Customer;

use GuzzleHttp\RequestOptions;
use Jetimob\Asaas\Api\AbstractApi;
use Jetimob\Asaas\Entity\Customer;

class CustomerApi extends AbstractApi
{
    /**
     * {@see https://docs.asaas.com/reference/criar-novo-cliente}
    */
    public function create(Customer $customer): CreateCustomerResponse
    {
        return $this->mappedPost('customers', CreateCustomerResponse::class, [
            RequestOptions::JSON => $customer,
        ]);
    }
    /**
     * {@see https://docs.asaas.com/reference/recuperar-um-unico-cliente}
     */
    public function find(string $id): FindCustomerResponse
    {
        return $this->mappedGet("customers/$id", FindCustomerResponse::class);
    }

    /**
     * {@see https://docs.asaas.com/reference/atualizar-cliente-existente}
    */
    public function update(string $id, Customer $customer): FindCustomerResponse
    {
        return $this->mappedPost("customers/$id", FindCustomerResponse::class, [
            RequestOptions::JSON => $customer,
        ]);
    }

    /**
     * {@see https://docs.asaas.com/reference/remover-cliente}
     */
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