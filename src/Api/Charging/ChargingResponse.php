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
    protected ?string $dateCreated;

    protected ?string $customer;

    protected ?string $paymentLink;

    protected ?string $dueDate;

    protected float $value;

    protected float $netValue;

    protected ?string $billingType;

    protected ?bool $canBePaidAfterDueDate;

    protected ?string $originalDueDate;

    protected ?string $pixTransaction;

    protected ?string $status;

    protected ?string $description;

    protected ?float $interestValue;

    protected ?string $externalReference;

    protected ?string $originalValue;

    protected ?string $paymentDate;

    protected ?string $clientPaymentDate;

    protected ?string $installmentNumber;

    protected ?string $transactionReceiptUrl;

    protected ?string $nossoNumero;

    protected ?string $invoiceUrl;

    protected ?string $bankSlipUrl;

    protected ?string $invoiceNumber;

    protected ?Discount $discount;

    protected ?Fine $fine;

    protected ?Interest $interest;

    protected ?bool $deleted;

    protected ?bool $postalService;

    protected ?bool $anticipated;

    protected ?bool $anticipable;

    protected ?array $refunds;

    public function refundsItemType(): string
    {
        return Refund::class;
    }

    public function getDateCreated(): ?string
    {
        return $this->dateCreated;
    }

    public function getCustomer(): ?string
    {
        return $this->customer;
    }

    public function getPaymentLink(): ?string
    {
        return $this->paymentLink;
    }

    public function getDueDate(): ?string
    {
        return $this->dueDate;
    }

    public function getValue(): float
    {
        return $this->value;
    }

    public function getNetValue(): float
    {
        return $this->netValue;
    }

    public function getBillingType(): ?string
    {
        return $this->billingType;
    }

    public function getCanBePaidAfterDueDate(): ?bool
    {
        return $this->canBePaidAfterDueDate;
    }

    public function getOriginalDueDate(): ?string
    {
        return $this->originalDueDate;
    }

    public function getPixTransaction(): ?string
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

    public function getInterestValue(): ?float
    {
        return $this->interestValue;
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

    public function getInvoiceUrl(): ?string
    {
        return $this->invoiceUrl;
    }

    public function getBankSlipUrl(): ?string
    {
        return $this->bankSlipUrl;
    }

    public function getInvoiceNumber(): ?string
    {
        return $this->invoiceNumber;
    }

    public function getDiscount(): ?Discount
    {
        return $this->discount;
    }

    public function getFine(): ?Fine
    {
        return $this->fine;
    }

    public function getInterest(): ?Interest
    {
        return $this->interest;
    }

    public function getDeleted(): ?bool
    {
        return $this->deleted;
    }

    public function isPostalService(): ?bool
    {
        return $this->postalService;
    }

    public function getAnticipated(): ?bool
    {
        return $this->anticipated;
    }

    public function getAnticipable(): ?bool
    {
        return $this->anticipable;
    }

    public function getRefunds(): ?array
    {
        return $this->refunds;
    }
}
