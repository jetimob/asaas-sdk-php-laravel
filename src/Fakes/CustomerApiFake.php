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
use Jetimob\Asaas\Mocks\CreateCustomerResponseMock;

class CustomerApiFake extends AbstractFakeApi implements CustomerApiInterface
{
    public function create(Customer $customer): CreateCustomerResponse
    {
        $customer = $this->makeResponse($customer);

        $this->entities->add($customer);

        return $customer;
    }

    public function find(string $id): FindCustomerResponse
    {
        return $this->entities->first(
            fn (CreateCustomerResponse $customer) => $customer->getId() === $id
        );
    }

    public function update(string $id, Customer $customer): UpdateCustomerResponse
    {
        $res = null;
        $this->entities->transform(function (CreateCustomerResponse $response) use ($id, $customer, &$res) {
            if ($response->getId() === $id) {
		        $response = UpdateCustomerResponse::deserialize(
                    CreateCustomerResponseMock::get([
                        'id' => $id,
                        ...$customer->toArray(),
                    ])
                );
		        $res = $response;
            }

            return $response;
	    });

	    return $res;
    }

    public function delete(string $id): DeleteCustomerResponse
    {
        $this->entities = $this->entities->filter(
            fn (CreateCustomerResponse $response) => $response->getId() !== $id
        );

        return DeleteCustomerResponse::deserialize(
            Utils::deletedResponse($id)->toArray()
        );
    }

    public function restore(string $id): RestoreCustomerResponse
    {
        throw new \Exception('Not implemented');
    }

    public function tokenizeCreditCard(TokenizeCreditCardInfo $creditCard): TokenizeCreditCardResponse
    {
        throw new \Exception('Not implemented');
    }

    public function makeResponse(Customer $customer): CreateCustomerResponse
    {
        return CreateCustomerResponse::deserialize(
            CreateCustomerResponseMock::get($customer->toArray()),
        );
    }
}
