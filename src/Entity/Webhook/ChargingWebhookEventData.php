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
    protected ?string $dateCreated = null;
    protected ?string $customer = null;
    protected ?string $subscription = null;
    /* Somente quando pertencer a uma assinatura */
    protected ?string $installment = null;
    /* Somento quando pertencer a um parcelamento */
    protected ?string $paymentLink = null;
    protected ?string $dueDate = null;
    protected ?string $originalDueDate = null;
    protected ?float $value = null;
    protected ?float $netValue = null;
    /* Para quando o valor pago é diferente do valor da cobrança */
    protected ?float $originalValue = null;
    protected ?float $interestValue = null;
    protected ?string $description = null;
    protected ?string $externalReference = null;
    /** Valores disponíveis em {@see BillingType} */
    protected ?string $billingType = null;
    /** Valores disponíveis em {@see ChargingStatus} */
    protected ?string $status = null;
    protected ?string $pixTransaction = null;
    protected ?string $confirmedDate = null;
    protected ?string $paymentDate = null;
    protected ?string $clientPaymentDate = null;
    protected ?string $installmentNumber = null;
    protected ?string $creditDate = null;
    protected ?string $estimatedCreditDate = null;
    protected ?string $invoiceUrl = null;
    protected ?string $bankSlipUrl = null;
    protected ?string $transactionReceiptUrl = null;
    protected ?string $invoiceNumber = null;
    protected ?bool $deleted = null;
    protected ?bool $anticipated = null;
    protected ?bool $acticipable = null;
    protected ?string $lastInvoiceViewedDate = null;
    protected ?string $lastBankSlipViewedDate = null;
    protected ?bool $postalService = null;
    protected ?string $duplicatedPayment = null;
    protected ?Discount $discount = null;
    protected ?Fine $fine = null;
    protected ?Interest $interest = null;
    protected ?array $split = null;
    protected ?ChargeBack $chargeBack = null;
    protected ?array $refunds = null;

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

    public function getDuplicatedPayment(): ?string
    {
        return $this->duplicatedPayment;
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
