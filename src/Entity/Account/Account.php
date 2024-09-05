<?php

namespace Jetimob\Asaas\Entity\Account;

use Jetimob\Asaas\Entity\Entity;
use Jetimob\Asaas\Entity\Webhook\WebhookConfiguration;

class Account extends Entity
{
    /**
     * Nome da subconta
     *
     * @var $name string|null
     */
    protected ?string $name;

    /**
     * Email da subconta
     *
     * @var string|null $email
     */
    protected ?string $email;

    /**
     * Email para login da subconta
     *
     * @var ?string $loginEmail
     */
    protected ?string $loginEmail;

    /**
     * CPF ou CNPJ do proprietário da subconta
     *
     * @var string|null $cpfCnpj
     */
    protected ?string $cpfCnpj;

    /**
     * Data de nascimento (somente quando Pessoa Física)
     *
     * @var string|null $birthDate
     */
    protected ?string $birthDate;

    /**
     * Tipo da empresa (somente quando Pessoa Jurídica)
     *
     * @var string|null $companyType
     */
    protected ?string $companyType;

    /**
     * Fone fixo
     *
     * @var string|null $phone
     */
    protected ?string $phone;

    /**
     * Fone celular
     *
     * @var string|null $mobilePhone
     */
    protected ?string $mobilePhone;

    /**
     * URL referente ao site da conta filha
     *
     * @var string|null $site
     */
    protected ?string $site;

    /**
     * Logradouro
     *
     * @var string|null $address
     */
    protected ?string $address;

    /**
     * Número do endereço
     *
     * @var string|null $addressNumber
     */
    protected ?string $addressNumber;

    /**
     * Complemento do endereço
     *
     * @var string|null $complement
     */
    protected ?string $complement;

    /**
     * Bairro
     *
     * @var string|null $province
     */
    protected ?string $province;

    /**
     * CEP do endereço
     *
     * @var string|null $postalCode
     */
    protected ?string $postalCode;

    /**
     * Array com as configurações de Webhooks desejadas
     *
     * @var $webhooks WebhookConfiguration[]
    */
    protected array $webhooks;

    /**
     * Valor de recebimentos mensal
     *
     * @var int $incomeValue
     */
    protected int $incomeValue;

    public function getProvince(): string
    {
        return $this->province;
    }

    public function setProvince(string $province): void
    {
        $this->province = $province;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;
        return $this;
    }

    public function getLoginEmail(): string
    {
        return $this->loginEmail;
    }

    public function setLoginEmail(string $loginEmail): self
    {
        $this->loginEmail = $loginEmail;
        return $this;
    }

    public function getCpfCnpj(): string
    {
        return $this->cpfCnpj;
    }

    public function setCpfCnpj(string $cpfCnpj): self
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

    public function getCompanyType(): ?CompanyType
    {
        return CompanyType::tryFrom($this->companyType);
    }

    public function setCompanyType(string $companyType): self
    {
        $this->companyType = $companyType;
        return $this;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): self
    {
        $this->phone = $phone;
        return $this;
    }

    public function getMobilePhone(): string
    {
        return $this->mobilePhone;
    }

    public function setMobilePhone(string $mobilePhone): self
    {
        $this->mobilePhone = $mobilePhone;
        return $this;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;
        return $this;
    }

    public function getAddressNumber(): string
    {
        return $this->addressNumber;
    }

    public function setAddressNumber(string $addressNumber): self
    {
        $this->addressNumber = $addressNumber;
        return $this;
    }

    public function getComplement(): string
    {
        return $this->complement;
    }

    public function setComplement(string $complement): self
    {
        $this->complement = $complement;
        return $this;
    }

    public function getPostalCode(): string
    {
        return $this->postalCode;
    }

    public function setPostalCode(string $postalCode): self
    {
        $this->postalCode = $postalCode;
        return $this;
    }

    public function getWebhooks(): array
    {
        return $this->webhooks;
    }

    public function setWebhooks(array $webhooks): self
    {
        $this->webhooks = $webhooks;
        return $this;
    }

    public function getIncomeValue(): int
    {
        return $this->incomeValue;
    }

    public function setIncomeValue(int $incomeValue): self
    {
        $this->incomeValue = $incomeValue;
        return $this;
    }
}
