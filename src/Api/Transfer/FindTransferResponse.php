<?php

namespace Jetimob\Asaas\Api\Transfer;

use Jetimob\Asaas\Api\EntityResponse;
use Jetimob\Asaas\Entity\Transfer\BankAccount;

class FindTransferResponse extends EntityResponse
{
    protected ?string $dateCreated;

    protected ?string $status;

    protected ?string $effectiveDate;

    protected ?string $endToEndIdentifier;

    protected ?string $type;

    protected ?int $value;

    protected ?int $netValue;

    protected ?int $transferFee;

    protected ?string $scheduleDate;

    protected ?bool $authorized;

    protected ?string $failReason;

    protected ?BankAccount $bankAccount;

    protected ?string $transactionReceiptUrl;

    protected ?string $operationType;

    protected ?string $description;

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

    public function getEndToEndIdentifier(): ?string
    {
        return $this->endToEndIdentifier;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function getValue(): ?int
    {
        return $this->value;
    }

    public function getNetValue(): ?int
    {
        return $this->netValue;
    }

    public function getTransferFee(): ?int
    {
        return $this->transferFee;
    }

    public function getScheduleDate(): ?string
    {
        return $this->scheduleDate;
    }

    public function getAuthorized(): ?bool
    {
        return $this->authorized;
    }

    public function getFailReason(): ?string
    {
        return $this->failReason;
    }

    public function getBankAccount(): ?BankAccount
    {
        return $this->bankAccount;
    }

    public function getTransactionReceiptUrl(): ?string
    {
        return $this->transactionReceiptUrl;
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
