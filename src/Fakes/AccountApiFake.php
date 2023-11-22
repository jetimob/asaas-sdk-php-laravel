<?php

declare(strict_types=1);

namespace Jetimob\Asaas\Fakes;

use Jetimob\Asaas\Api\Account\AccountBalanceResponse;
use Jetimob\Asaas\Api\Account\AccountResponse;
use Jetimob\Asaas\Api\Account\CreateAccountResponse;
use Jetimob\Asaas\Api\Account\FindAccountResponse;
use Jetimob\Asaas\Api\Account\FindPendingDocumentsResponse;
use Jetimob\Asaas\Api\Account\FindWalletsResponse;
use Jetimob\Asaas\Api\Account\InvoiceCustomizeResponse;
use Jetimob\Asaas\Api\Account\SplitStatisticsResponse;
use Jetimob\Asaas\Contracts\AccountApiInterface;
use Jetimob\Asaas\Entity\Account\Account;
use Jetimob\Asaas\Entity\Account\InvoiceCustomization;
use Jetimob\Asaas\Mocks\CreateAccountResponseMock;

class AccountApiFake extends AbstractFakeApi implements AccountApiInterface
{
    public function create(Account $account): CreateAccountResponse
    {
        $account = $this->makeResponse($account);

        $this->entities->add($account);

        return $account;
    }

    public function find(string $id): FindAccountResponse
    {
        return $this->entities->first(
            fn (AccountResponse $account) => $account->getId() === $id
        );
    }

    public function balance(): AccountBalanceResponse
    {
        return AccountBalanceResponse::deserialize([
           'balance' => fake()->randomFloat(2),
        ]);
    }

    public function splitsStatistics(): SplitStatisticsResponse
    {
        throw new \Exception('Not implemented');
    }

    public function customizeInvoice(InvoiceCustomization $invoiceCustomization): InvoiceCustomizeResponse
    {
        throw new \Exception('Not implemented');
    }

    public function findWallets(): FindWalletsResponse
    {
        throw new \Exception('Not implemented');
    }

    protected function makeResponse(Account $account): CreateAccountResponse
    {
        return CreateAccountResponse::deserialize(
            CreateAccountResponseMock::get($account->toArray())
        );
    }

    public function findPendingDocuments(): FindPendingDocumentsResponse
    {
        throw new \Exception('Not implemented');
    }
}