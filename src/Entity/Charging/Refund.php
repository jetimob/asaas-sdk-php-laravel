<?php

namespace Jetimob\Asaas\Entity\Charging;

use Jetimob\Asaas\Entity\Entity;

class Refund extends Entity
{
    protected ?string $dateCreated = null;

    protected ?string $status = null;

    protected ?float $value = null;

    protected ?string $description = null;

    protected ?string $transactionReceiptUrl = null;

    public function getDateCreated(): ?string
    {
        return $this->dateCreated;
    }

    public function getStatus(): ?RefundStatus
    {
        return RefundStatus::tryFrom($this->status);
    }

    public function getValue(): ?float
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