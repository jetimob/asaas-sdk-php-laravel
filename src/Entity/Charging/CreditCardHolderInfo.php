<?php

namespace Jetimob\Asaas\Entity\Charging;

use Jetimob\Asaas\Entity\Entity;

class CreditCardHolderInfo extends Entity
{
    /**
     * Nome do titular do cartão
     *
     * @var $name string|null
     */
    protected ?string $name = null;

    /**
     * Email do titular do cartão
     *
     * @var $email string|null
     */
    protected ?string $email = null;

    /**
     * CPF ou CNPJ do titular do cartão
     *
     * @var $cpfCnpj string|null
     */
    protected ?string $cpfCnpj = null;

    /**
     * CEP do titular do cartão
     *
     * @var string|null
     */
    protected ?string $postalCode = null;

    /**
     * Número do endereço do titular do cartão
     *
     * @var string|null
     */
    protected ?string $addressNumber = null;

    /**
     * Complemento do endereço do titular do cartão
     *
     * @var string|null
     */
    protected ?string $addressComplement = null;

    /**
     * Fone com DDD do titular do cartão
     *
     * @var $phone string|null
     */
    protected ?string $phone = null;

    /**
     * Fone celular do titular do cartão
     *
     * @var string|null
     */
    protected ?string $mobilePhone = null;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;
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

    public function getCpfCnpj(): ?string
    {
        return $this->cpfCnpj;
    }

    public function setCpfCnpj(?string $cpfCnpj): self
    {
        $this->cpfCnpj = $cpfCnpj;
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

    public function getAddressNumber(): ?string
    {
        return $this->addressNumber;
    }

    public function setAddressNumber(?string $addressNumber): self
    {
        $this->addressNumber = $addressNumber;
        return $this;
    }

    public function getAddressComplement(): ?string
    {
        return $this->addressComplement;
    }

    public function setAddressComplement(?string $addressComplement): self
    {
        $this->addressComplement = $addressComplement;
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
}
