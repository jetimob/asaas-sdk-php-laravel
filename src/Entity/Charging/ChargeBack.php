<?php

namespace Jetimob\Asaas\Entity\Charging;

use Jetimob\Asaas\Entity\Entity;

class ChargeBack extends Entity
{
    protected ?string $status;

    protected ?string $reason;

    public function getStatus(): ?ChargeBackStatus
    {
        return ChargeBackStatus::tryFrom($this->status);
    }

    public function getReason(): ?ChargeBackReason
    {
        return ChargeBackReason::tryFrom($this->reason);
    }
}
