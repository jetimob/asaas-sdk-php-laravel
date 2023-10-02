<?php

namespace Jetimob\Asaas\Entity\Charging;

use Jetimob\Asaas\Entity\Entity;

class Refund extends Entity
{
    protected ?string $dateCreated;

    protected ?string $status;

    protected ?float $value;

    protected ?string $description;

    protected ?string $transactionReceiptUrl;

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