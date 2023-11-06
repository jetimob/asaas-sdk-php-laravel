<?php

declare(strict_types=1);

namespace Jetimob\Asaas\Contracts;

use Jetimob\Asaas\Api\Customer\CreateCustomerResponse;
use Jetimob\Asaas\Api\Customer\DeleteCustomerResponse;
use Jetimob\Asaas\Api\Customer\FindCustomerResponse;
use Jetimob\Asaas\Api\Customer\RestoreCustomerResponse;
use Jetimob\Asaas\Api\Customer\TokenizeCreditCardResponse;
use Jetimob\Asaas\Api\Customer\UpdateCustomerResponse;
use Jetimob\Asaas\Entity\Customer\Customer;
use Jetimob\Asaas\Entity\Customer\TokenizeCreditCardInfo;

/** @mixin \Jetimob\Asaas\Fakes\CustomerApiFake */
interface CustomerApiInterface
{
    public function create(Customer $customer): CreateCustomerResponse;

    public function find(string $id): FindCustomerResponse;

    public function update(string $id, Customer $customer): UpdateCustomerResponse;

    public function delete(string $id): DeleteCustomerResponse;

    public function restore(string $id): RestoreCustomerResponse;

    public function tokenizeCreditCard(TokenizeCreditCardInfo $creditCard): TokenizeCreditCardResponse;
}
