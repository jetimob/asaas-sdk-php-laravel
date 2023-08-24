<?php

namespace Jetimob\Asaas\Api\Transfer;

use Jetimob\Asaas\Api\EntityResponse;
use Jetimob\Asaas\Entity\Transfer\BankAccount;

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
     * @var $value int
    */
    protected int $value;

    /**
     * @var $netValue int
    */
    protected int $netValue;

    /**
     * @var $status string
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

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;
        return $this;
    }

    public function getDateCreated(): string
    {
        return $this->dateCreated;
    }

    public function setDateCreated(string $dateCreated): self
    {
        $this->dateCreated = $dateCreated;
        return $this;
    }

    public function getValue(): int
    {
        return $this->value;
    }

    public function setValue(int $value): self
    {
        $this->value = $value;
        return $this;
    }

    public function getNetValue(): int
    {
        return $this->netValue;
    }

    public function setNetValue(int $netValue): self
    {
        $this->netValue = $netValue;
        return $this;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;
        return $this;
    }

    public function getTransferFee(): int
    {
        return $this->transferFee;
    }

    public function setTransferFee(int $transferFee): self
    {
        $this->transferFee = $transferFee;
        return $this;
    }

    public function getEffectiveDate(): string
    {
        return $this->effectiveDate;
    }

    public function setEffectiveDate(string $effectiveDate): self
    {
        $this->effectiveDate = $effectiveDate;
        return $this;
    }

    public function getEndToEndIdentifier(): string
    {
        return $this->endToEndIdentifier;
    }

    public function setEndToEndIdentifier(string $endToEndIdentifier): self
    {
        $this->endToEndIdentifier = $endToEndIdentifier;
        return $this;
    }

    public function getScheduleDate(): string
    {
        return $this->scheduleDate;
    }

    public function setScheduleDate(string $scheduleDate): self
    {
        $this->scheduleDate = $scheduleDate;
        return $this;
    }

    public function isAuthorized(): bool
    {
        return $this->authorized;
    }

    public function setAuthorized(bool $authorized): self
    {
        $this->authorized = $authorized;
        return $this;
    }

    public function getFailReason(): ?string
    {
        return $this->failReason;
    }

    public function setFailReason(?string $failReason): self
    {
        $this->failReason = $failReason;
        return $this;
    }

    public function getBankAccount(): BankAccount
    {
        return $this->bankAccount;
    }

    public function setBankAccount(BankAccount $bankAccount): self
    {
        $this->bankAccount = $bankAccount;
        return $this;
    }

    public function getTransactionReceiptUrl(): string
    {
        return $this->transactionReceiptUrl;
    }

    public function setTransactionReceiptUrl(string $transactionReceiptUrl): self
    {
        $this->transactionReceiptUrl = $transactionReceiptUrl;
        return $this;
    }

    public function getOperationType(): string
    {
        return $this->operationType;
    }

    public function setOperationType(string $operationType): self
    {
        $this->operationType = $operationType;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }
}
