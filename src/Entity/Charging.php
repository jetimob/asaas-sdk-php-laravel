<?php

namespace Jetimob\Asaas\Entity;

class Charging extends Entity
{
    /**
     * id do cliente criado na Asaas
     *
     * {@see https://docs.asaas.com/reference/criar-novo-cliente}
     *
     * @var $customer string
     */
    protected string $customer;

    /**
     * Valores disponíveis {@see BillingType}
     *
     * @var $billingType string
    */
    protected BillingType $billingType;

    /** @var $value float */
    protected float $value;

    /**
     * Formato de data {@see https://pt.wikipedia.org/wiki/ISO_8601}
     *
     * @var $dueDate string
     */
    protected string $dueDate;

    /** @var $description string|null */
    protected ?string $description;

    /**
     * Informação de referência externa, possibilitando a realização de pesquisa.
     *
     * @var $externalReference string|null
     */
    protected ?string $externalReference;

    /**
     * Número de parcelas (somento no caso de cobrança parcelada)
     *
     * @var $installmentCount int|null
    */
    protected ?int $installmentCount;

    /**
     * Valor de cada percela (somento no caso de cobrança parcelada)
     *
     * @var $installmentValue int|null
     */
    protected ?int $installmentValue;

    /** @var $discount DiscountType|null */
    protected ?DiscountType $discount;

    /** @var $interest Interest|null */
    protected ?Interest $interest;

    /** @var $fine Fine|null */
    protected ?Fine $fine;

    /**
     * Define se a cobrança vai ser enviada pelos correios
     *
     * @var $postalService bool
    */
    protected bool $postalService;

    /**
     * Configuração dos splits
     *
     * @see https://docs.asaas.com/docs/split-de-pagamentos
     *
     * @var $split Split[]
    */
    protected array $split;

    public function getCustomer(): string
    {
        return $this->customer;
    }

    public function setCustomer(string $customer): self
    {
        $this->customer = $customer;
        return $this;
    }

    public function getBillingType(): BillingType
    {
        return $this->billingType;
    }

    public function setBillingType(BillingType $billingType): self
    {
        $this->billingType = $billingType;
        return $this;
    }

    public function getValue(): float
    {
        return $this->value;
    }

    public function setValue(float $value): self
    {
        $this->value = $value;
        return $this;
    }

    public function getDueDate(): string
    {
        return $this->dueDate;
    }

    public function setDueDate(string $dueDate): self
    {
        $this->dueDate = $dueDate;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
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

    public function getInstallmentCount(): ?int
    {
        return $this->installmentCount;
    }

    public function setInstallmentCount(?int $installmentCount): self
    {
        $this->installmentCount = $installmentCount;
        return $this;
    }

    public function getInstallmentValue(): ?int
    {
        return $this->installmentValue;
    }

    public function setInstallmentValue(?int $installmentValue): self
    {
        $this->installmentValue = $installmentValue;
        return $this;
    }

    public function getDiscount(): ?DiscountType
    {
        return $this->discount;
    }

    public function setDiscount(?DiscountType $discount): self
    {
        $this->discount = $discount;
        return $this;
    }

    public function getInterest(): ?Interest
    {
        return $this->interest;
    }

    public function setInterest(?Interest $interest): self
    {
        $this->interest = $interest;
        return $this;
    }

    public function getFine(): ?Fine
    {
        return $this->fine;
    }

    public function setFine(?Fine $fine): self
    {
        $this->fine = $fine;
        return $this;
    }

    public function isPostalService(): bool
    {
        return $this->postalService;
    }

    public function setPostalService(bool $postalService): self
    {
        $this->postalService = $postalService;
        return $this;
    }

    public function getSplit(): ?array
    {
        return $this->split;
    }

    public function setSplit(?array $split): self
    {
        $this->split = $split;
        return $this;
    }
}