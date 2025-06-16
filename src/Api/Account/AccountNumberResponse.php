<?php

namespace Jetimob\Asaas\Api\Account;

class AccountNumberResponse
{
    protected ?string $agency;
    protected ?string $account;
    protected ?string $accountDigit;

    public function getAgency(): ?string
    {
        return $this->agency;
    }
    public function getAccount(): ?string
    {
        return $this->account;
    }
    public function getAccountDigit(): ?string
    {
        return $this->accountDigit;
    }
}
