<?php

namespace Jetimob\Asaas\Entity\Transfer;

use Jetimob\Asaas\Entity\Entity;

class BankAccount extends Entity
{
    /**
     * @var $bank Bank|null
    */
    protected ?Bank $bank;

    /**
     * Nome da conta bancária
     *
     * @var $accountName string|null
    */
    protected ?string $accountName;

    /**
     * Nome do proprietário da conta
     *
     * @var $ownerName string|null
     */
    protected ?string $ownerName;

    /**
     * Data de nascimento do proprietário da conta.
     * Somente quando a conta bancária não pertencer ao mesmo CPF ou CNPJ da conta Asaas.
     *
     * @var $ownerBirthDate string|null
    */
    protected ?string $ownerBirthDate;

    /**
     * CPF ou CNPJ do proprietário da conta bancária
     *
     * @var $cpfCnpj string|null
    */
    protected ?string $cpfCnpj;

    /**
     * Número da agência sem dígito
     *
     * @var $agency string|null
    */
    protected ?string $agency;

    /**
     * @var $agencyDigit string|null
    */
    protected ?string $agencyDigit;

    /**
     * Dígito da conta bancária
     *
     * @var $accountDigit string|null
    */
    protected ?string $accountDigit;

    /**
     * @var $pixAddressKey string|null
    */
    protected ?string $pixAddressKey;

    /**
     * @var $account string|null
    */
    protected ?string $account;

    /**
     * Tipo da conta. Valores disponíveis em {@see BankAccountType}
     *
     * @var $bankAccountType string|null
    */
    protected ?string $bankAccountType;

    /**
     * Identificador no Sistema de Pagamentos Brasileiro
     *
     * @var $ispb string|null
    */
    protected ?string $ispb;

    public function getBank(): ?Bank
    {
        return $this->bank;
    }

    public function setBank(?Bank $bank): self
    {
        $this->bank = $bank;
        return $this;
    }

    public function getAccountName(): ?string
    {
        return $this->accountName;
    }

    public function setAccountName(?string $accountName): self
    {
        $this->accountName = $accountName;
        return $this;
    }

    public function getOwnerName(): ?string
    {
        return $this->ownerName;
    }

    public function setOwnerName(?string $ownerName): self
    {
        $this->ownerName = $ownerName;
        return $this;
    }

    public function getOwnerBirthDate(): ?string
    {
        return $this->ownerBirthDate;
    }

    public function setOwnerBirthDate(?string $ownerBirthDate): self
    {
        $this->ownerBirthDate = $ownerBirthDate;
        return $this;
    }

    public function getCpfCnpj(): ?string
    {
        return $this->cpfCnpj;
    }

    public function setCpfCnpj(?string $cpfCnpj): self
    {
        $this->cpfCnpj = $cpfCnpj;
        return $this;
    }

    public function getAgency(): ?string
    {
        return $this->agency;
    }

    public function setAgency(?string $agency): self
    {
        $this->agency = $agency;
        return $this;
    }

    public function getAccountDigit(): ?string
    {
        return $this->accountDigit;
    }

    public function setAccountDigit(?string $accountDigit): self
    {
        $this->accountDigit = $accountDigit;
        return $this;
    }

    public function getBankAccountType(): ?BankAccountType
    {
        return BankAccountType::tryFrom($this->bankAccountType);
    }

    public function setBankAccountType(?string $bankAccountType): self
    {
        $this->bankAccountType = $bankAccountType;
        return $this;
    }

    public function getIspb(): ?string
    {
        return $this->ispb;
    }

    public function getPixAddressKey(): ?string
    {
        return $this->pixAddressKey;
    }

    public function setPixAddressKey(?string $pixAddressKey): self
    {
        $this->pixAddressKey = $pixAddressKey;
        return $this;
    }

    public function getAccount(): ?string
    {
        return $this->account;
    }

    public function setAccount(?string $account): self
    {
        $this->account = $account;
        return $this;
    }

    public function getAgencyDigit(): ?string
    {
        return $this->agencyDigit;
    }

    public function setAgencyDigit(?string $agencyDigit): self
    {
        $this->agencyDigit = $agencyDigit;
        return $this;
    }

    public function setIspb(?string $ispb): self
    {
        $this->ispb = $ispb;
        return $this;
    }
}
