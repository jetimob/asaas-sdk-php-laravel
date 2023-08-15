<?php

namespace Jetimob\Asaas\Api\Account;

use Jetimob\Http\Response;

class AccountBalanceResponse extends Response
{
    /**
     * Saldo da conta
     *
     * @var $balance float
     */
    protected float $balance;

    public function getBalance(): float
    {
        return $this->balance;
    }
}
