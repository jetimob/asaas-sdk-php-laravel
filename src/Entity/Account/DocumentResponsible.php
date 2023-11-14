<?php

namespace Jetimob\Asaas\Entity\Account;

use Jetimob\Asaas\Entity\Entity;

class DocumentResponsible extends Entity
{
    protected ?string $name = null;

    protected ?string $type = null;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function getType(): ?string
    {
        return $this->type;
    }
}
