<?php

namespace Jetimob\Asaas\Entity\Webhook;

class AccountStatusEventData extends WebhookEventData
{
    protected ?string $commercialInfo = null;

    protected ?string $bankAccountInfo = null;

    protected ?string $documentation = null;

    protected ?string $general = null;

    public function getCommercialInfo(): ?string
    {
        return $this->commercialInfo;
    }

    public function getBankAccountInfo(): ?string
    {
        return $this->bankAccountInfo;
    }

    public function getDocumentation(): ?string
    {
        return $this->documentation;
    }

    public function getGeneral(): ?string
    {
        return $this->general;
    }
}
