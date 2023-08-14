<?php

namespace Jetimob\Asaas\Api\Customer;

use Jetimob\Http\Response;

class CustomerResponse extends Response
{
    protected string $object;
    protected string $id;
    protected string $dateCreated;
    protected string $name;
    protected ?string $email;
    protected ?string $phone;
    protected ?string $mobilePhone;
    protected ?string $address;
    protected ?string $addressNumber;
    protected ?string $complement;
    protected ?string $province;
    protected ?string $postalCode;
    protected string $cpfCnpj;
    protected ?string $personType;
    protected bool $deleted;
    protected ?string $additionalEmails;
    protected ?string $externalReference;
    protected bool $notificationDisabled;
    protected ?int $city;
    protected ?string $state;
    protected ?string $country;
    protected ?string $observations;

    public function getObject(): string
    {
        return $this->object;
    }

    public function getId(): string
    {
        return $this->id;
    }

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

    public function getCpfCnpj(): string
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