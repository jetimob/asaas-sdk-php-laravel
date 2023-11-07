<?php

namespace Jetimob\Asaas\Entity\Webhook;

use Jetimob\Asaas\Entity\Transfer\BankAccount;

class TransferWebhookEventData extends WebhookEventData
{
    protected ?string $dateCreated = null;
    protected ?string $status = null;
    protected ?string $effectiveDate = null;
    protected ?string $endToEndIndetifier = null;
    protected ?string $type = null;
    protected ?float $value = null;
    protected ?float $transferFee = null;
    protected ?string $scheduleDate = null;
    protected ?bool $authorized = null;
    protected ?string $failReason = null;
    protected ?string $transactionReceiptUrl = null;
    protected ?BankAccount $bankAccount = null;
    protected ?string $operationType = null;
    protected ?string $description = null;

    public function getDateCreated(): ?string
    {
        return $this->dateCreated;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function getEffectiveDate(): ?string
    {
        return $this->effectiveDate;
    }

    public function getEndToEndIndetifier(): ?string
    {
        return $this->endToEndIndetifier;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function getValue(): ?float
    {
        return $this->value;
    }

    public function getTransferFee(): ?float
    {
        return $this->transferFee;
    }

    public function getScheduleDate(): ?string
    {
        return $this->scheduleDate;
    }

    public function isAuthorized(): ?bool
    {
        return $this->authorized;
    }

    public function getFailReason(): ?string
    {
        return $this->failReason;
    }

    public function getTransactionReceiptUrl(): ?string
    {
        return $this->transactionReceiptUrl;
    }

    public function getBankAccount(): ?BankAccount
    {
        return $this->bankAccount;
    }

    public function getOperationType(): ?string
    {
        return $this->operationType;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }
}
