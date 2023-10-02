<?php

namespace Jetimob\Asaas\Entity\Webhook;

use Jetimob\Asaas\Entity\Charging\BillingType;
use Jetimob\Asaas\Entity\Charging\ChargeBack;
use Jetimob\Asaas\Entity\Charging\ChargingStatus;
use Jetimob\Asaas\Entity\Charging\Discount;
use Jetimob\Asaas\Entity\Charging\Fine;
use Jetimob\Asaas\Entity\Charging\Interest;
use Jetimob\Asaas\Entity\Charging\Refund;
use Jetimob\Asaas\Entity\Charging\Split;


class ChargingWebhookEventData extends WebhookEventData
{
    protected ?string $dateCreated;
    protected ?string $customer;
    protected ?string $subscription;
    /* Somente quando pertencer a uma assinatura */
    protected ?string $installment;
    /* Somento quando pertencer a um parcelamento */
    protected ?string $paymentLink;
    protected ?string $dueDate;
    protected ?string $originalDueDate;
    protected ?float $value;
    protected ?float $netValue;
    /* Para quando o valor pago é diferente do valor da cobrança */
    protected ?float $originalValue;
    protected ?float $interestValue;
    protected ?string $description;
    protected ?string $externalReference;
    /** Valores disponíveis em {@see BillingType} */
    protected ?string $billingType;
    /** Valores disponíveis em {@see ChargingStatus} */
    protected ?string $status;
    protected ?string $pixTransaction;
    protected ?string $confirmedDate;
    protected ?string $paymentDate;
    protected ?string $clientPaymentDate;
    protected ?string $installmentNumber;
    protected ?string $creditDate;
    protected ?string $estimatedCreditDate;
    protected ?string $invoiceUrl;
    protected ?string $bankSlipUrl;
    protected ?string $transactionReceiptUrl;
    protected ?string $invoiceNumber;
    protected ?bool $deleted;
    protected ?bool $anticipated;
    protected ?bool $acticipable;
    protected ?string $lastInvoiceViewedDate;
    protected ?string $lastBankSlipViewedDate;
    protected ?bool $postalService;
    protected ?Discount $discount;
    protected ?Fine $fine;
    protected ?Interest $interest;
    protected ?array $split;
    protected ?ChargeBack $chargeBack;
    protected ?array $refunds;

    public function splitItemType(): string
    {
        return Split::class;
    }

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

    public function getSubscription(): ?string
    {
        return $this->subscription;
    }

    public function getInstallment(): ?string
    {
        return $this->installment;
    }

    public function getPaymentLink(): ?string
    {
        return $this->paymentLink;
    }

    public function getDueDate(): ?string
    {
        return $this->dueDate;
    }

    public function getOriginalDueDate(): ?string
    {
        return $this->originalDueDate;
    }

    public function getValue(): ?float
    {
        return $this->value;
    }

    public function getNetValue(): ?float
    {
        return $this->netValue;
    }

    public function getOriginalValue(): ?float
    {
        return $this->originalValue;
    }

    public function getInterestValue(): ?float
    {
        return $this->interestValue;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function getExternalReference(): ?string
    {
        return $this->externalReference;
    }

    public function getBillingType(): ?string
    {
        return $this->billingType;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function getPixTransaction(): ?string
    {
        return $this->pixTransaction;
    }

    public function getConfirmedDate(): ?string
    {
        return $this->confirmedDate;
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

    public function getCreditDate(): ?string
    {
        return $this->creditDate;
    }

    public function getEstimatedCreditDate(): ?string
    {
        return $this->estimatedCreditDate;
    }

    public function getInvoiceUrl(): ?string
    {
        return $this->invoiceUrl;
    }

    public function getBankSlipUrl(): ?string
    {
        return $this->bankSlipUrl;
    }

    public function getTransactionReceiptUrl(): ?string
    {
        return $this->transactionReceiptUrl;
    }

    public function getInvoiceNumber(): ?string
    {
        return $this->invoiceNumber;
    }

    public function getDeleted(): ?bool
    {
        return $this->deleted;
    }

    public function getAnticipated(): ?bool
    {
        return $this->anticipated;
    }

    public function getActicipable(): ?bool
    {
        return $this->acticipable;
    }

    public function getLastInvoiceViewedDate(): ?string
    {
        return $this->lastInvoiceViewedDate;
    }

    public function getLastBankSlipViewedDate(): ?string
    {
        return $this->lastBankSlipViewedDate;
    }

    public function getPostalService(): ?bool
    {
        return $this->postalService;
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

    public function getSplit(): ?array
    {
        return $this->split;
    }

    public function getChargeBack(): ?ChargeBack
    {
        return $this->chargeBack;
    }

    public function getRefunds(): ?array
    {
        return $this->refunds;
    }
}
