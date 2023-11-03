<?php

declare(strict_types=1);

namespace Jetimob\Asaas\Fakes;

use Jetimob\Asaas\Api\Customer\CreateCustomerResponse;
use Jetimob\Asaas\Api\Customer\DeleteCustomerResponse;
use Jetimob\Asaas\Api\Customer\FindCustomerResponse;
use Jetimob\Asaas\Api\Customer\RestoreCustomerResponse;
use Jetimob\Asaas\Api\Customer\TokenizeCreditCardResponse;
use Jetimob\Asaas\Api\Customer\UpdateCustomerResponse;
use Jetimob\Asaas\Contracts\CustomerApiInterface;
use Jetimob\Asaas\Entity\Customer\Customer;
use Jetimob\Asaas\Entity\Customer\TokenizeCreditCardInfo;

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

    public function update(string $id, Customer $customer): UpdateCustomerResponse
    {
        return new UpdateCustomerResponse();
    }

    public function delete(string $id): DeleteCustomerResponse
    {
        return new DeleteCustomerResponse();
    }

    public function restore(string $id): RestoreCustomerResponse
    {
        return new RestoreCustomerResponse();
    }

    public function tokenizeCreditCard(TokenizeCreditCardInfo $creditCard): TokenizeCreditCardResponse
    {
        return new TokenizeCreditCardResponse();
    }
}
