<?php

namespace Jetimob\Asaas\Api\Transfer;

use Jetimob\Asaas\Api\EntityResponse;
use Jetimob\Asaas\Entity\Transfer\BankAccount;
use Jetimob\Asaas\Entity\Transfer\TransferStatus;

class RequestTransferResponse extends EntityResponse
{
    /**
     * @var $type string
     */
    protected string $type;

    /**
     *
     * @var $dateCreated string
    */
    protected string $dateCreated;

    /**
     * @var $value float
    */
    protected float $value;

    /**
     * @var $netValue float
    */
    protected float $netValue;

    /**
     * @var $status string
     *
     * Valores disponíveis em {@see TransferStatus}
    */
    protected string $status;

    /**
     * @var $transferFee int
    */
    protected int $transferFee;

    /**
     * @var $effectiveDate string
    */
    protected string $effectiveDate;

    /**
     * @var $endToEndIdentifier string
    */
    protected string $endToEndIdentifier;

    /**
     * @var $scheduleDate string|null
    */
    protected ?string $scheduleDate;

    /**
     * @var $authorized bool
    */
    protected bool $authorized;

    /**
     * @var $failReason string|null
    */
    protected ?string $failReason;

    /**
     * @var $bankAccount BankAccount
    */
    protected BankAccount $bankAccount;

    /**
     * @var $transactionReceiptUrl string
    */
    protected string $transactionReceiptUrl;

    /**
     * @var $operationType string
    */
    protected string $operationType;

    /**
     * @var $description string|null
    */
    protected ?string $description;

    public function getType(): string
    {
        return $this->type;
    }

    public function getDateCreated(): string
    {
        return $this->dateCreated;
    }

    public function getValue(): int
    {
        return $this->value;
    }

    public function getNetValue(): int
    {
        return $this->netValue;
    }

    public function getStatus(): TransferStatus
    {
        return TransferStatus::from($this->status);
    }

    public function getTransferFee(): int
    {
        return $this->transferFee;
    }

    public function getEffectiveDate(): string
    {
        return $this->effectiveDate;
    }

    public function getEndToEndIdentifier(): string
    {
        return $this->endToEndIdentifier;
    }

    public function getScheduleDate(): ?string
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

    public function getBankAccount(): BankAccount
    {
        return $this->bankAccount;
    }

    public function getTransactionReceiptUrl(): string
    {
        return $this->transactionReceiptUrl;
    }

    public function getOperationType(): string
    {
        return $this->operationType;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }
}
