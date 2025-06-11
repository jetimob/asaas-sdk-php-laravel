<?php

namespace Jetimob\Asaas\Entity\Account;

use Jetimob\Asaas\Entity\Entity;

class CommercialInfoExpiration extends Entity
{
    protected ?bool $isExpired;
    protected ?string $scheduledDate;

    public function getIsExpired(): ?bool
    {
        return $this->isExpired;
    }

    public function setIsExpired(?bool $isExpired): self
    {
        $this->isExpired = $isExpired;
        return $this;
    }

    public function getScheduledDate(): ?string
    {
        return $this->scheduledDate;
    }

    public function setScheduledDate(?string $scheduledDate): self
    {
        $this->scheduledDate = $scheduledDate;
        return $this;
    }
}
