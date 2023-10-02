<?php

namespace Jetimob\Asaas\Api\Account;

use Jetimob\Asaas\Api\EntityResponse;
use Jetimob\Asaas\Entity\Account\AccountNumber;

class AccountResponse extends EntityResponse
{
     protected ?string $dateCreated;

    protected ?string $name;

    protected ?string $email;

    protected ?string $loginEmail;

    protected ?string $phone;

    protected ?string $mobilePhone;

    protected string|null $address;

    protected ?string $addressNumber;

    protected ?string $complement;

    protected ?string $province;

    protected ?string $postalCode;

    protected ?string $cpfCnpj;

    protected ?string $birthDate;

    protected ?string $personType;

    protected ?string $companyType;

    protected ?int $city;

    protected ?string $state;

    protected ?string $country;

    protected ?string $site;

    protected ?string $apiKey;

    protected ?string $walletId;

    protected ?AccountNumber $accountNumber;

    public function getDateCreated(): ?string
    {
        return $this->dateCreated;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function getLoginEmail(): ?string
    {
        return $this->loginEmail;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function getMobilePhone(): ?string
    {
        return $this->mobilePhone;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function getAddressNumber(): ?string
    {
        return $this->addressNumber;
    }

    public function getComplement(): ?string
    {
        return $this->complement;
    }

    public function getProvince(): ?string
    {
        return $this->province;
    }

    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }

    public function getCpfCnpj(): ?string
    {
        return $this->cpfCnpj;
    }

    public function getBirthDate(): ?string
    {
        return $this->birthDate;
    }

    public function getPersonType(): ?string
    {
        return $this->personType;
    }

    public function getCompanyType(): ?string
    {
        return $this->companyType;
    }

    public function getCity(): ?int
    {
        return $this->city;
    }

    public function getState(): ?string
    {
        return $this->state;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function getSite(): ?string
    {
        return $this->site;
    }

    public function getApiKey(): ?string
    {
        return $this->apiKey;
    }

    public function getWalletId(): ?string
    {
        return $this->walletId;
    }

    public function getAccountNumber(): ?AccountNumber
    {
        return $this->accountNumber;
    }
}
