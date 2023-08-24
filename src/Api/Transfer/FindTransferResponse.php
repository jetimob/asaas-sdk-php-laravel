<?php

namespace Jetimob\Asaas\Api\Transfer;

use Jetimob\Asaas\Api\EntityResponse;
use Jetimob\Asaas\Entity\Transfer\BankAccount;

class FindTransferResponse extends EntityResponse
{
    /**
     * @var $dateCreated string
    */
    protected string $dateCreated;

    /**
     * @var string $status
    */
    protected string $status;

    /**
     * @var $effectiveDate string|null
    */
    protected ?string $effectiveDate;

    /**
     * @var $endToEndIdentifier string|null
    */
    protected ?string $endToEndIdentifier;

    /**
     * @var $type string
    */
    protected string $type;

    /**
     * @var $value int
    */
    protected int $value;

    /**
     * @var $netValue int
    */
    protected int $netValue;

    /**
     * @var $transferFee int
    */
    protected int $transferFee;

    /**
     * @var $scheduleDate string
    */
    protected string $scheduleDate;

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

    public function getDateCreated(): string
    {
        return $this->dateCreated;
    }

    public function getStatus(): string
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

    public function getType(): string
    {
        return $this->type;
    }

    public function getValue(): int
    {
        return $this->value;
    }

    public function getNetValue(): int
    {
        return $this->netValue;
    }

    public function getTransferFee(): int
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