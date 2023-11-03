<?php

namespace Jetimob\Asaas\Contracts;

use Jetimob\Asaas\Api\Account\AccountBalanceResponse;
use Jetimob\Asaas\Api\Account\CreateAccountResponse;
use Jetimob\Asaas\Api\Account\FindAccountResponse;
use Jetimob\Asaas\Api\Account\FindWalletsResponse;
use Jetimob\Asaas\Api\Account\InvoiceCustomizeResponse;
use Jetimob\Asaas\Api\Account\SplitStatisticsResponse;
use Jetimob\Asaas\Entity\Account\Account;
use Jetimob\Asaas\Entity\Account\InvoiceCustomization;

interface AccountApiInterface
{
    public function create(Account $account): CreateAccountResponse;

    public function find(string $id): FindAccountResponse;

    public function balance(): AccountBalanceResponse;

    public function splitsStatistics(): SplitStatisticsResponse;

    public function customizeInvoice(InvoiceCustomization $invoiceCustomization): InvoiceCustomizeResponse;

    public function findWallets(): FindWalletsResponse;
}