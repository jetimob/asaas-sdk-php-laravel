<?php

namespace Jetimob\Asaas\Entity\Charging;

use Jetimob\Asaas\Entity\Entity;

class Refund extends Entity
{
    /** @var $dateCreated string */
    protected string $dateCreated;

    /** @var $status string */
    protected string $status;

    /** @var $value float */
    protected float $value;

    /** @var $description string|null */
    protected ?string $description;

    /** @var $transactionReceiptUrl string|null */
    protected ?string $transactionReceiptUrl;

    public function getDateCreated(): string
    {
        return $this->dateCreated;
    }

    public function getStatus(): ?RefundStatus
    {
        return RefundStatus::tryFrom($this->status);
    }

    public function getValue(): float
    {
        return $this->value;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function getTransactionReceiptUrl(): ?string
    {
        return $this->transactionReceiptUrl;
    }
}