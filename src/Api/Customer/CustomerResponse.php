<?php

namespace Jetimob\Asaas\Api\Customer;

use Jetimob\Asaas\Api\EntityResponse;

abstract class CustomerResponse extends EntityResponse
{
    /**
     * @var string|null
     */
    protected ?string $dateCreated;

    /**
     * @var string|null
     */
    protected ?string $name;

    /**
     * @var string|null
     */
    protected ?string $email;

    /**
     * @var string|null
     */
    protected ?string $phone;

    /**
     * @var string|null
     */
    protected ?string $mobilePhone;

    /**
     * @var string|null
     */
    protected ?string $address;

    /**
     * @var string|null
     */
    protected ?string $addressNumber;

    /**
     * @var string|null
     */
    protected ?string $complement;

    /**
     * @var string|null
     */
    protected ?string $province;

    /**
     * @var string|null
     */
    protected ?string $postalCode;

    /**
     * @var string|null
     */
    protected ?string $cpfCnpj;

    /**
     * @var string|null
     */
    protected ?string $personType;

    /**
     * @var bool
     */
    protected bool $deleted;

    /**
     * @var string|null
     */
    protected ?string $additionalEmails;

    /**
     * @var string|null
     */
    protected ?string $externalReference;

    /**
     * @var bool
     */
    protected bool $notificationDisabled;

    /**
     * @var int|null
     */
    protected ?int $city;

    /**
     * @var string|null
     */
    protected ?string $state;

    /**
     * @var string|null
     */
    protected ?string $country;

    /**
     * @var string|null
     */
    protected ?string $observations;

    public function getDateCreated(): string
    {
        return $this->dateCreated;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getEmail(): ?string
    {
        return $this->email;
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

    public function getPersonType(): ?string
    {
        return $this->personType;
    }

    public function isDeleted(): bool
    {
        return $this->deleted;
    }

    public function getAdditionalEmails(): ?string
    {
        return $this->additionalEmails;
    }

    public function getExternalReference(): ?string
    {
        return $this->externalReference;
    }

    public function isNotificationDisabled(): bool
    {
        return $this->notificationDisabled;
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

    public function getObservations(): ?string
    {
        return $this->observations;
    }
}
