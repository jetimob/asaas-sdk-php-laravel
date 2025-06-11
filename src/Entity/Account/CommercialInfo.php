<?php

namespace Jetimob\Asaas\Entity\Account;

use Jetimob\Asaas\Entity\Entity;

class CommercialInfo extends Entity
{
    //**
    // Para poder atualizar os dados comerciais, é necessário realizar o preenchimento de todas as informações abaixo.
    // Caso não envie todas elas novamente, a requisição interpretará como null, alterando os dados comerciais.
    // Ou seja, apagando os dados já preenchidos anteriormente.
    //  */
    protected ?string $personType;
    protected ?string $cpfCnpj;
    protected ?string $birthDate;
    protected ?string $companyType;
    protected ?int $incomeValue;
    protected ?string $email;
    protected ?string $phone;
    protected ?string $mobilePhone;
    protected ?string $site;
    protected ?string $postalCode;
    protected ?string $address;
    protected ?string $addressNumber;
    protected ?string $complement;
    /**
     * @var string
     */
    protected ?string $province;

    public function getPersonType(): ?string
    {
        return $this->personType;
    }

    public function setPersonType(?string $personType): self
    {
        $this->personType = $personType;
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

    public function getBirthDate(): ?string
    {
        return $this->birthDate;
    }

    public function setBirthDate(?string $birthDate): self
    {
        $this->birthDate = $birthDate;
        return $this;
    }

    public function getCompanyType(): ?string
    {
        return $this->companyType;
    }

    public function setCompanyType(?string $companyType): self
    {
        $this->companyType = $companyType;
        return $this;
    }

    public function getIncomeValue(): ?int
    {
        return $this->incomeValue;
    }

    public function setIncomeValue(?int $incomeValue): self
    {
        $this->incomeValue = $incomeValue;
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

    public function getPhone(): string
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

    public function getSite(): ?string
    {
        return $this->site;
    }

    public function setSite(?string $site): self
    {
        $this->site = $site;
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
}
