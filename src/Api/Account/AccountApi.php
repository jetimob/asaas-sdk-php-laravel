<?php

namespace Jetimob\Asaas\Api\Account;

use GuzzleHttp\RequestOptions;
use Jetimob\Asaas\Api\AbstractApi;
 use Jetimob\Asaas\Entity\Account\Account;

class AccountApi extends AbstractApi
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
}
