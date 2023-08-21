<?php

namespace Jetimob\Asaas\Entity\Account;

use Jetimob\Asaas\Entity\Entity;

class AccountNumber extends Entity
{
    /**
     * @var $agency string
    */
    protected string $agency;

    /**
     * @var $account string
    */
    protected string $account;

    /**
     * @var $accountDigit string
    */
    protected string $accountDigit;

    public function getAgency(): string
    {
        return $this->agency;
    }

    public function setAgency(string $agency): self
    {
        $this->agency = $agency;
        return $this;
    }

    public function getAccount(): string
    {
        return $this->account;
    }

    public function setAccount(string $account): self
    {
        $this->account = $account;
        return $this;
    }

    public function getAccountDigit(): string
    {
        return $this->accountDigit;
    }

    public function setAccountDigit(string $accountDigit): self
    {
        $this->accountDigit = $accountDigit;
        return $this;
    }
}
