<?php

namespace Jetimob\Asaas\Api\Account;

use Jetimob\Asaas\Api\EntityResponse;
use Jetimob\Asaas\Entity\AccountNumber;

class AccountResponse extends EntityResponse
{
    /** @var string $dateCreated */
    protected string $dateCreated;

    /** @var string $name */
    protected string $name;

    /** @var string $email */
    protected string $email;

    /** @var string $loginEmail */
    protected string $loginEmail;

    /** @var string|null $phone */
    protected ?string $phone;

    /** @var string|null $mobilePhone */
    protected ?string $mobilePhone;

    /** @var ?string $address */
    protected string|null $address;

    /** @var string|null $addressNumber */
    protected ?string $addressNumber;

    /** @var string|null $complement */
    protected ?string $complement;

    /** @var string|null $province */
    protected ?string $province;

    /** @var string $postalCode */
    protected string $postalCode;

    /** @var string $cpfCnpj */
    protected string $cpfCnpj;

    /** @var string $birthDate */
    protected string $birthDate;

    /** @var string $personType */
    protected string $personType;

    /** @var string|null $companyType */
    protected ?string $companyType;

    /** @var int $city */
    protected int $city;

    /** @var string $state */
    protected string $state;

    /** @var string $country */
    protected string $country;

    /** @var string|null $site */
    protected ?string $site;

    /** @var string|null $apiKey */
    protected ?string $apiKey;

    /** @var string $walletId */
    protected string $walletId;

    /** @var AccountNumber $accountNumber */
    protected AccountNumber $accountNumber;

    public function getDateCreated(): string
    {
        return $this->dateCreated;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getLoginEmail(): string
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

    public function getPostalCode(): string
    {
        return $this->postalCode;
    }

    public function getCpfCnpj(): string
    {
        return $this->cpfCnpj;
    }

    public function getBirthDate(): string
    {
        return $this->birthDate;
    }

    public function getPersonType(): string
    {
        return $this->personType;
    }

    public function getCompanyType(): string
    {
        return $this->companyType;
    }

    public function getCity(): int
    {
        return $this->city;
    }

    public function getState(): string
    {
        return $this->state;
    }

    public function getCountry(): string
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

    public function getWalletId(): string
    {
        return $this->walletId;
    }

    public function getAccountNumber(): AccountNumber
    {
        return $this->accountNumber;
    }
}
