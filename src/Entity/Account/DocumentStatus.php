<?php

namespace Jetimob\Asaas\Entity\Account;

use Jetimob\Asaas\Entity\Entity;

class DocumentStatus extends Entity
{
    protected ?string $id = null;

    protected ?string $status = null;

    protected ?string $type = null;

    protected ?string $title = null;

    protected ?string $description = null;

    protected ?string $onboardingUrl = null;

    protected ?DocumentResponsible $responsible = null;

    protected ?array $documents = null;

    public function responsibleItemType(): string
    {
        return DocumentResponsible::class;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getStatus(): ?DocumentStatusEnum
    {
        return DocumentStatusEnum::tryFrom($this->status);
    }

    public function getType(): ?DocumentTypeEnum
    {
        return DocumentTypeEnum::tryFrom($this->type);
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function getOnboardingUrl(): ?string
    {
        return $this->onboardingUrl;
    }

    public function getResponsible(): ?DocumentResponsible
    {
        return $this->responsible;
    }

    public function getDocuments(): ?array
    {
        return $this->documents;
    }
}
