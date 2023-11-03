<?php

declare(strict_types=1);

namespace Jetimob\Asaas\Fakes;

use Illuminate\Support\Collection;
use Jetimob\Asaas\Api\Customer\CreateCustomerResponse;
use Jetimob\Asaas\Api\Customer\DeleteCustomerResponse;
use Jetimob\Asaas\Api\Customer\FindCustomerResponse;
use Jetimob\Asaas\Api\Customer\RestoreCustomerResponse;
use Jetimob\Asaas\Api\Customer\TokenizeCreditCardResponse;
use Jetimob\Asaas\Api\Customer\UpdateCustomerResponse;
use Jetimob\Asaas\Contracts\CustomerApiInterface;
use Jetimob\Asaas\Entity\Customer\Customer;
use Jetimob\Asaas\Entity\Customer\TokenizeCreditCardInfo;
use Jetimob\Asaas\Mocks\CreateCustomerResponseMock;

class CustomerApiFake implements CustomerApiInterface
{
    protected Collection $customers;

    protected string $token;

    public function __construct()
    {
        $this->token = fake()->uuid();
        $this->customers = new Collection();
    }

    public function usingToken(string $token): self
    {
        $this->token = $token;
        return $this;
    }

    public function create(Customer $customer): CreateCustomerResponse
    {
        $customer = CreateCustomerResponse::deserialize(
            CreateCustomerResponseMock::get($customer->toArray()),
        );

        $this->customers->add($customer);
        return $customer;
    }

    public function find(string $id): FindCustomerResponse
    {
        return $this->customers->first(fn (CreateCustomerResponse $customer) => $customer->getId() === $id);
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
