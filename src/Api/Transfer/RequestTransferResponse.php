<?php

namespace Jetimob\Asaas\Api\Transfer;

use Jetimob\Asaas\Api\EntityResponse;
use Jetimob\Asaas\Entity\Transfer\BankAccount;
use Jetimob\Asaas\Entity\Transfer\OperationType;
use Jetimob\Asaas\Entity\Transfer\TransferStatus;

class RequestTransferResponse extends EntityResponse
{
    protected ?string $type;

    protected ?string $dateCreated;

    protected ?float $value;

    protected ?float $netValue;

    protected ?string $status;

    protected ?int $transferFee;

    protected ?string $effectiveDate;

    protected ?string $endToEndIdentifier;

    protected ?string $scheduleDate;

    protected ?bool $authorized;

    protected ?string $failReason;

    protected ?BankAccount $bankAccount;

    protected ?string $transactionReceiptUrl;

    protected ?string $operationType;

    protected ?string $description;

    public function getType(): ?string
    {
        return $this->type;
    }

    public function getDateCreated(): ?string
    {
        return $this->dateCreated;
    }

    public function getValue(): ?float
    {
        return $this->value;
    }

    public function getNetValue(): ?float
    {
        return $this->netValue;
    }

    public function getStatus(): ?TransferStatus
    {
        return TransferStatus::tryFrom($this->status);
    }

    public function getTransferFee(): ?int
    {
        return $this->transferFee;
    }

    public function getEffectiveDate(): ?string
    {
        return $this->effectiveDate;
    }

    public function getEndToEndIdentifier(): ?string
    {
        return $this->endToEndIdentifier;
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

    public function getOperationType(): ?OperationType
    {
        return OperationType::tryFrom($this->operationType);
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }
}
