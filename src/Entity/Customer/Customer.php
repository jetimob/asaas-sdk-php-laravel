<?php

namespace Jetimob\Asaas\Entity\Customer;

use Jetimob\Asaas\Entity\Entity;

class Customer extends Entity
{
    /** @var $name string */
    protected string $name;

    /** @var $cpfCnpj string */
    protected string $cpfCnpj;

    /** @var $email string|null */
    protected ?string $email;

    /**
     * Telefone fixo
     * @var $phone string|null
     */
    protected ?string $phone;

    /**
     * Telefone celular
     * @var $mobilePhone string|null
     */
    protected ?string $mobilePhone;

    /**
     * Logradouro
     * @var $address string|null
     */
    protected ?string $address;

    /** @var $addressNumber string|null */
    protected ?string $addressNumber;

    /** @var $complement string|null */
    protected ?string $complement;

    /**
     * Bairro
     * @var $province string|null
     */
    protected ?string $province;

    /** @var $postalCode string|null */
    protected ?string $postalCode;

    /** @var $externalReference string|null */
    protected ?string $externalReference;

    /**
     * Envio de notificações de cobrança
     *
     * @var $notificationDisabled bool
     */
    protected bool $notificationDisabled;

    /**
     * Emails adicionais para envio de notificações de cobrança separados por ","
     * @var $additionalEmails string|null
     */
    protected ?string $additionalEmails;

    /** @var $municipalInscription string|null  */
    protected ?string $municipalInscription;

    /** @var $stateInscription string|null */
    protected ?string $stateInscription;

    /** @var $observations string|null */
    protected ?string $observations;

    /** @var $groupName string|null */
    protected ?string $groupName;

    /** @var $company string|null */
    protected ?string $company;

    public function getName(): string
    {
        return $this->name;
    }

    public function getCpfCnpj(): string
    {
        return $this->cpfCnpj;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function getMobilePhone(): string
    {
        return $this->mobilePhone;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function getAddressNumber(): string
    {
        return $this->addressNumber;
    }

    public function getComplement(): string
    {
        return $this->complement;
    }

    public function getProvince(): string
    {
        return $this->province;
    }

    public function getPostalCode(): string
    {
        return $this->postalCode;
    }

    public function getExternalReference(): string
    {
        return $this->externalReference;
    }

    public function isNotificationDisabled(): bool
    {
        return $this->notificationDisabled;
    }

    public function getAdditionalEmails(): string
    {
        return $this->additionalEmails;
    }

    public function getMunicipalInscription(): string
    {
        return $this->municipalInscription;
    }

    public function getStateInscription(): string
    {
        return $this->stateInscription;
    }

    public function getObservations(): string
    {
        return $this->observations;
    }

    public function getGroupName(): string
    {
        return $this->groupName;
    }

    public function getCompany(): string
    {
        return $this->company;
    }

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function setCpfCnpj(string $cpfCnpj): self
    {
        $this->cpfCnpj = $cpfCnpj;
        return $this;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;
        return $this;
    }

    public function setPhone(string $phone): self
    {
        $this->phone = $phone;
        return $this;
    }

    public function setMobilePhone(string $mobilePhone): self
    {
        $this->mobilePhone = $mobilePhone;
        return $this;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;
        return $this;
    }

    public function setAddressNumber(string $addressNumber): self
    {
        $this->addressNumber = $addressNumber;
        return $this;
    }

    public function setComplement(string $complement): self
    {
        $this->complement = $complement;
        return $this;
    }

    public function setProvince(string $province): self
    {
        $this->province = $province;
        return $this;
    }

    public function setPostalCode(string $postalCode): self
    {
        $this->postalCode = $postalCode;
        return $this;
    }

    public function setExternalReference(string $externalReference): self
    {
        $this->externalReference = $externalReference;
        return $this;
    }

    public function setNotificationDisabled(bool $notificationDisabled): self
    {
        $this->notificationDisabled = $notificationDisabled;
        return $this;
    }

    public function setAdditionalEmails(string $additionalEmails): self
    {
        $this->additionalEmails = $additionalEmails;
        return $this;
    }

    public function setMunicipalInscription(string $municipalInscription): self
    {
        $this->municipalInscription = $municipalInscription;
        return $this;
    }

    public function setStateInscription(string $stateInscription): self
    {
        $this->stateInscription = $stateInscription;
        return $this;
    }

    public function setObservations(string $observations): self
    {
        $this->observations = $observations;
        return $this;
    }

    public function setGroupName(string $groupName): self
    {
        $this->groupName = $groupName;
        return $this;
    }

    public function setCompany(string $company): self
    {
        $this->company = $company;
        return $this;
    }
}
