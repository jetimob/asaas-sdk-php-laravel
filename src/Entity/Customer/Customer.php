<?php

namespace Jetimob\Asaas\Entity\Customer;

use Jetimob\Asaas\Entity\Entity;

class Customer extends Entity
{
    /** @var $name string|null */
    protected ?string $name = null;

    /** @var $cpfCnpj string|null */
    protected ?string $cpfCnpj = null;

    /** @var $email string|null */
    protected ?string $email = null;

    /**
     * Telefone fixo
     * @var $phone string|null
     */
    protected ?string $phone = null;

    /**
     * Telefone celular
     * @var $mobilePhone string|null
     */
    protected ?string $mobilePhone = null;

    /**
     * Logradouro
     * @var $address string|null
     */
    protected ?string $address = null;

    /** @var $addressNumber string|null */
    protected ?string $addressNumber = null;

    /** @var $complement string|null */
    protected ?string $complement = null;

    /**
     * Bairro
     * @var $province string|null
     */
    protected ?string $province = null;

    /** @var $postalCode string|null */
    protected ?string $postalCode = null;

    /** @var $externalReference string|null */
    protected ?string $externalReference = null;

    /**
     * Envio de notificações de cobrança
     *
     * @var $notificationDisabled bool|null
     */
    protected ?bool $notificationDisabled = null;

    /**
     * Emails adicionais para envio de notificações de cobrança separados por ","
     * @var $additionalEmails string|null
     */
    protected ?string $additionalEmails = null;

    /** @var $municipalInscription string|null  */
    protected ?string $municipalInscription = null;

    /** @var $stateInscription string|null */
    protected ?string $stateInscription = null;

    /** @var $observations string|null */
    protected ?string $observations = null;

    /** @var $groupName string|null */
    protected ?string $groupName = null;

    /** @var $company string|null */
    protected ?string $company = null;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;
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

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;
        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;
        return $this;
    }

    public function getMobilePhone(): ?string
    {
        return $this->mobilePhone;
    }

    public function setMobilePhone(?string $mobilePhone): self
    {
        $this->mobilePhone = $mobilePhone;
        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(?string $address): self
    {
        $this->address = $address;
        return $this;
    }

    public function getAddressNumber(): ?string
    {
        return $this->addressNumber;
    }

    public function setAddressNumber(?string $addressNumber): self
    {
        $this->addressNumber = $addressNumber;
        return $this;
    }

    public function getComplement(): ?string
    {
        return $this->complement;
    }

    public function setComplement(?string $complement): self
    {
        $this->complement = $complement;
        return $this;
    }

    public function getProvince(): ?string
    {
        return $this->province;
    }

    public function setProvince(?string $province): self
    {
        $this->province = $province;
        return $this;
    }

    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }

    public function setPostalCode(?string $postalCode): self
    {
        $this->postalCode = $postalCode;
        return $this;
    }

    public function getExternalReference(): ?string
    {
        return $this->externalReference;
    }

    public function setExternalReference(?string $externalReference): self
    {
        $this->externalReference = $externalReference;
        return $this;
    }

    public function getNotificationDisabled(): ?bool
    {
        return $this->notificationDisabled;
    }

    public function setNotificationDisabled(?bool $notificationDisabled): self
    {
        $this->notificationDisabled = $notificationDisabled;
        return $this;
    }

    public function getAdditionalEmails(): ?string
    {
        return $this->additionalEmails;
    }

    public function setAdditionalEmails(?string $additionalEmails): self
    {
        $this->additionalEmails = $additionalEmails;
        return $this;
    }

    public function getMunicipalInscription(): ?string
    {
        return $this->municipalInscription;
    }

    public function setMunicipalInscription(?string $municipalInscription): self
    {
        $this->municipalInscription = $municipalInscription;
        return $this;
    }

    public function getStateInscription(): ?string
    {
        return $this->stateInscription;
    }

    public function setStateInscription(?string $stateInscription): self
    {
        $this->stateInscription = $stateInscription;
        return $this;
    }

    public function getObservations(): ?string
    {
        return $this->observations;
    }

    public function setObservations(?string $observations): self
    {
        $this->observations = $observations;
        return $this;
    }

    public function getGroupName(): ?string
    {
        return $this->groupName;
    }

    public function setGroupName(?string $groupName): self
    {
        $this->groupName = $groupName;
        return $this;
    }

    public function getCompany(): ?string
    {
        return $this->company;
    }

    public function setCompany(?string $company): self
    {
        $this->company = $company;
        return $this;
    }
}
