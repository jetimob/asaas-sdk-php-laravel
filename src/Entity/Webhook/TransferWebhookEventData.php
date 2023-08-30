<?php

namespace Jetimob\Asaas\Entity\Webhook;

use Jetimob\Asaas\Entity\Transfer\BankAccount;
use Jetimob\Http\Traits\Serializable;

class TransferWebhookEventData extends WebhookEventData
{
    protected string $dateCreated;
    protected string $status;
    protected string $effectiveDate;
    protected ?string $endToEndIndetifier;
    protected ?string $type;
    protected ?float $value;
    protected ?float $transferFee;
    protected string $scheduleDate;
    protected bool $authorized;
    protected ?string $failReason;
    protected ?string $transactionReceiptUrl;
    protected ?BankAccount $bankAccount;
    protected ?string $operationType;
    protected ?string $description;

    public function getDateCreated(): string
    {
        return $this->dateCreated;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function getEffectiveDate(): string
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

    public function getScheduleDate(): string
    {
        return $this->scheduleDate;
    }

    public function isAuthorized(): bool
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
