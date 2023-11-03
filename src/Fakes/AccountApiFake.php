<?php

declare(strict_types=1);

namespace Jetimob\Asaas\Fakes;

use Illuminate\Support\Collection;
use Jetimob\Asaas\Api\Account\AccountBalanceResponse;
use Jetimob\Asaas\Api\Account\AccountResponse;
use Jetimob\Asaas\Api\Account\CreateAccountResponse;
use Jetimob\Asaas\Api\Account\FindAccountResponse;
use Jetimob\Asaas\Api\Account\FindWalletsResponse;
use Jetimob\Asaas\Api\Account\InvoiceCustomizeResponse;
use Jetimob\Asaas\Api\Account\SplitStatisticsResponse;
use Jetimob\Asaas\Contracts\AccountApiInterface;
use Jetimob\Asaas\Entity\Account\Account;
use Jetimob\Asaas\Entity\Account\InvoiceCustomization;
use Jetimob\Asaas\Mocks\CreateAccountResponseMock;

class AccountApiFake implements AccountApiInterface
{
    /** @var Collection|AccountResponse[] */
    public Collection $accounts;

    public function __construct()
    {
        $this->accounts = new Collection();
    }

    public function create(Account $account): CreateAccountResponse
    {
        $account = CreateAccountResponse::deserialize(
            CreateAccountResponseMock::get(
                $account->toArray()
            )
        );

        $this->accounts->add($account);

        return $account;
    }

    public function find(string $id): FindAccountResponse
    {
        return $this->accounts->first(
            fn (AccountResponse $account) => $account->getId() === $id
        );
    }

    public function balance(): AccountBalanceResponse
    {
        return AccountBalanceResponse::deserialize([
           'balance' => fake()->randomFloat(),
        ]);
    }

    public function splitsStatistics(): SplitStatisticsResponse
    {
        // TODO: Implement splitsStatistics() method.
    }

    public function customizeInvoice(InvoiceCustomization $invoiceCustomization): InvoiceCustomizeResponse
    {
        // TODO: Implement customizeInvoice() method.
    }

    public function findWallets(): FindWalletsResponse
    {
        // TODO: Implement findWallets() method.
    }
}