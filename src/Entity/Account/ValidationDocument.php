<?php

namespace Jetimob\Asaas\Entity\Account;

use Jetimob\Asaas\Entity\Entity;

class ValidationDocument extends Entity
{
    protected ?string $type;

    protected ?string $documentFile;

    public function getDocumentFile(): ?string
    {
        return $this->documentFile;
    }

    public function setDocumentFile(?string $documentFile): self
    {
        $this->documentFile = $documentFile;
        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;
        return $this;
    }

    public function toArray(): array
    {
        return [
            [
                'name' => 'type',
                'contents' => $this->getType(),
            ],
            [
                'name' => 'documentFile',
                'contents' => $this->getDocumentFile(),
            ]
        ];
    }
}
