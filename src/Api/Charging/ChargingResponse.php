<?php

namespace Jetimob\Asaas\Api\Charging;

use Jetimob\Asaas\Api\EntityResponse;
use Jetimob\Asaas\Entity\Charging\BillingType;
use Jetimob\Asaas\Entity\Charging\ChargingStatus;
use Jetimob\Asaas\Entity\Charging\Discount;
use Jetimob\Asaas\Entity\Charging\Fine;
use Jetimob\Asaas\Entity\Charging\Interest;
use Jetimob\Asaas\Entity\Charging\Refund;

abstract class ChargingResponse extends EntityResponse
{
    /** @var $dateCreated string */
    protected string $dateCreated;

    /**
     * id do cliente
     *
     * @var $customer string
     */
    protected string $customer;

    /** @var $paymentLink string|null */
    protected ?string $paymentLink;

    /** @var $dueDate string */
    protected string $dueDate;

    /** @var $value float */
    protected float $value;

    /** @var $netValue float|null */
    protected ?float $netValue;

    /**
     * Valores disponíveis {@see BillingType}
     *
     * @var $billingType string
     */
    protected string $billingType;

    /** @var $canBePaidAfterDueDate bool */
    protected bool $canBePaidAfterDueDate;

    /** @var $pixTransaction string|null */
    protected ?string $pixTransaction;

    /** @var $status string */
    protected string $status;

    /** @var $description string|null */
    protected ?string $description;

    /** @var $externalReference string|null */
    protected ?string $externalReference;

    /** @var $originalValue string|null */
    protected ?string $originalValue;

    /** @var $paymentDate string|null */
    protected ?string $paymentDate;

    /** @var $clientPaymentDate string|null */
    protected ?string $clientPaymentDate;

    /** @var $installmentNumber string|null */
    protected ?string $installmentNumber;

    /** @var $transactionReceiptUrl string|null */
    protected ?string $transactionReceiptUrl;

    /** @var $nossoNumero string|null */
    protected ?string $nossoNumero;

    /** @var $invoiceUrl string */
    protected string $invoiceUrl;

    /**
     * Link do boleto
     * @var $bankSlipUrl string|null
     */
    protected ?string $bankSlipUrl;

    /** @var $invoiceNumber int */
    protected int $invoiceNumber;

    /** @var $discount Discount|null */
    protected ?Discount $discount;

    /** @var $fine Fine */
    protected Fine $fine;

    /** @var $interest Interest */
    protected Interest $interest;

    /** @var $deleted bool */
    protected bool $deleted;

    /** @var $postalService bool */
    protected bool $postalService;

    /** @var $anticipated bool */
    protected bool $anticipated;

    /** @var $anticipable bool */
    protected bool $anticipable;

    /** @var $refunds Refund[]|null */
    protected ?array $refunds;

    public function getDateCreated(): string
    {
        return $this->dateCreated;
    }

    public function getCustomer(): string
    {
        return $this->customer;
    }

    public function getPaymentLink(): string
    {
        return $this->paymentLink;
    }

    public function getDueDate(): string
    {
        return $this->dueDate;
    }

    public function getValue(): float
    {
        return $this->value;
    }

    public function getNetValue(): ?float
    {
        return $this->netValue;
    }

    public function getBillingType(): BillingType
    {
        return BillingType::tryFrom($this->billingType);
    }

    public function canBePaidAfterDueDate(): bool
    {
        return $this->canBePaidAfterDueDate;
    }

    public function getPixTransaction(): string
    {
        return $this->pixTransaction;
    }

    public function getStatus(): ?ChargingStatus
    {
        return ChargingStatus::tryFrom($this->status);
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function getExternalReference(): ?string
    {
        return $this->externalReference;
    }

    public function getOriginalValue(): ?string
    {
        return $this->originalValue;
    }

    public function getPaymentDate(): ?string
    {
        return $this->paymentDate;
    }

    public function getClientPaymentDate(): ?string
    {
        return $this->clientPaymentDate;
    }

    public function getInstallmentNumber(): ?string
    {
        return $this->installmentNumber;
    }

    public function getTransactionReceiptUrl(): ?string
    {
        return $this->transactionReceiptUrl;
    }

    public function getNossoNumero(): ?string
    {
        return $this->nossoNumero;
    }

    public function getInvoiceUrl(): string
    {
        return $this->invoiceUrl;
    }

    public function getBankSlipUrl(): string
    {
        return $this->bankSlipUrl;
    }

    public function getInvoiceNumber(): int
    {
        return $this->invoiceNumber;
    }

    public function getDiscount(): ?Discount
    {
        return $this->discount;
    }

    public function getFine(): Fine
    {
        return $this->fine;
    }

    public function getInterest(): Interest
    {
        return $this->interest;
    }

    public function isDeleted(): bool
    {
        return $this->deleted;
    }

    public function isPostalService(): bool
    {
        return $this->postalService;
    }

    public function isAnticipated(): bool
    {
        return $this->anticipated;
    }

    public function isAnticipable(): bool
    {
        return $this->anticipable;
    }

    public function getRefunds(): ?array
    {
        return $this->refunds;
    }
}
