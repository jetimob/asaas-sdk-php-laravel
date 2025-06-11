<?php

namespace Jetimob\Asaas\Api\Account;

use Jetimob\Asaas\Api\EntityResponse;
use Jetimob\Asaas\Entity\Account\City;
use Jetimob\Asaas\Entity\Account\CommercialInfoExpiration;

class CommercialInfoResponse extends EntityResponse
{
    protected ?string $status;
    protected ?string $personType;
    protected ?string $cpfCnpj;
    protected ?string $name;
    protected ?string $birthDate;
    protected ?string $companyName;
    protected ?string $companyType;
    protected ?int $incomeValue;
    protected ?string $email;
    protected ?string $phone;
    protected ?string $mobilePhone;
    protected ?string $postalCode;
    protected ?string $address;
    protected ?string $addressNumber;
    protected ?string $complement;
    protected ?string $province;
    protected ?City $city;
    protected ?string $denialReason;
    protected ?string $tradingName;
    protected ?string $site;
    protected ?CommercialInfoExpiration $commercialInfoExpiration;

    /**
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @return string|null
     */
    public function getPersonType(): ?string
    {
        return $this->personType;
    }

    /**
     * @return string|null
     */
    public function getCpfCnpj(): ?string
    {
        return $this->cpfCnpj;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return string|null
     */
    public function getBirthDate(): ?string
    {
        return $this->birthDate;
    }

    /**
     * @return string|null
     */
    public function getCompanyName(): ?string
    {
        return $this->companyName;
    }

    /**
     * @return string|null
     */
    public function getCompanyType(): ?string
    {
        return $this->companyType;
    }

    /**
     * @return int|null
     */
    public function getIncomeValue(): ?int
    {
        return $this->incomeValue;
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @return string|null
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * @return string|null
     */
    public function getMobilePhone(): ?string
    {
        return $this->mobilePhone;
    }

    /**
     * @return string|null
     */
    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }

    /**
     * @return string|null
     */
    public function getAddress(): ?string
    {
        return $this->address;
    }

    /**
     * @return string|null
     */
    public function getAddressNumber(): ?string
    {
        return $this->addressNumber;
    }

    /**
     * @return string|null
     */
    public function getComplement(): ?string
    {
        return $this->complement;
    }

    /**
     * @return string|null
     */
    public function getProvince(): ?string
    {
        return $this->province;
    }

    /**
     * @return City|null
     */
    public function getCity(): ?City
    {
        return $this->city;
    }

    /**
     * @return string|null
     */
    public function getDenialReason(): ?string
    {
        return $this->denialReason;
    }

    /**
     * @return string|null
     */
    public function getTradingName(): ?string
    {
        return $this->tradingName;
    }

    /**
     * @return string|null
     */
    public function getSite(): ?string
    {
        return $this->site;
    }

    /**
     * @return CommercialInfoExpiration|null
     */
    public function getCommercialInfoExpiration(): ?CommercialInfoExpiration
    {
        return $this->commercialInfoExpiration;
    }
}
