<?php

namespace Jetimob\Asaas\Api\Account;

use GuzzleHttp\RequestOptions;
use Jetimob\Asaas\Api\AbstractApi;
use Jetimob\Asaas\Contracts\AccountApiInterface;
use Jetimob\Asaas\Entity\Account\Account;
use Jetimob\Asaas\Entity\Account\InvoiceCustomization;

class AccountApi extends AbstractApi implements AccountApiInterface
{
    /**
     * {@see https://docs.asaas.com/reference/criar-subconta}
    */
    public function create(Account $account): CreateAccountResponse
    {
        return $this->mappedPost('accounts', CreateAccountResponse::class, [
            RequestOptions::JSON => $account,
        ]);
    }

    /**
     * {@see https://docs.asaas.com/reference/recuperar-uma-unica-subconta}
    */
    public function find(string $id): FindAccountResponse
    {
        return $this->mappedGet("accounts/?id=$id", FindAccountResponse::class);
    }

    /**
     * {@see https://docs.asaas.com/reference/recuperar-saldo-da-conta}
    */
    public function balance(): AccountBalanceResponse
    {
        return $this->mappedGet('finance/balance', AccountBalanceResponse::class);
    }

    /**
     * {@see https://docs.asaas.com/reference/recuperar-valores-de-split}
    */
    public function splitsStatistics(): SplitStatisticsResponse
    {
        return $this->mappedGet('finance/split/statistics', SplitStatisticsResponse::class);
    }

    /**
     * {@see https://docs.asaas.com/reference/salvar-personalizacao-da-fatura}
    */
    public function customizeInvoice(InvoiceCustomization $invoiceCustomization): InvoiceCustomizeResponse
    {
        return $this->mappedPost('myAccount/paymentCheckoutConfig', InvoiceCustomizeResponse::class, [
            RequestOptions::MULTIPART => $invoiceCustomization->toArray(),
        ]);
    }

    /**
     * {@see https://docs.asaas.com/reference/recuperar-walletid}
    */
    public function findWallets(): FindWalletsResponse
    {
        return $this->mappedGet('wallets', FindWalletsResponse::class);
    }

    public function findPendingDocuments(): FindPendingDocumentsResponse
    {
        return $this->mappedGet('myAccount/documents');
    }
}
