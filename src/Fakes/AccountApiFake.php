<?php

declare(strict_types=1);

namespace Jetimob\Asaas\Fakes;

use Illuminate\Support\Collection;
use Jetimob\Asaas\Api\Account\AccountBalanceResponse;
use Jetimob\Asaas\Api\Account\CreateAccountResponse;
use Jetimob\Asaas\Api\Account\FindAccountResponse;
use Jetimob\Asaas\Api\Account\FindWalletsResponse;
use Jetimob\Asaas\Api\Account\InvoiceCustomizeResponse;
use Jetimob\Asaas\Api\Account\SplitStatisticsResponse;
use Jetimob\Asaas\Contracts\AccountApiInterface;
use Jetimob\Asaas\Entity\Account\Account;
use Jetimob\Asaas\Entity\Account\InvoiceCustomization;

class AccountApiFake implements AccountApiInterface
{
    public Collection $accounts;

    public function __construct()
    {
        $this->accounts = new Collection();
    }

    public function create(Account $account): CreateAccountResponse
    {
        $account = CreateAccountResponse::deserialize([]);

        $this->accounts->add($account);

        return $account;
    }

    public function find(string $id): FindAccountResponse
    {
        // TODO: Implement find() method.
    }

    public function balance(): AccountBalanceResponse
    {
        // TODO: Implement balance() method.
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