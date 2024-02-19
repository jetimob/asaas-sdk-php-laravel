<?php

declare(strict_types=1);

namespace Jetimob\Asaas\Api\Account;

use Jetimob\Http\Response;
use Jetimob\Asaas\Entity\Account\PixAddressKeyStatus;

class CreatePixKeyResponse extends Response
{
    /**
     * Identificador único da chave Pix no Asaas
    */
    protected ?string $id = null;

    /**
     * Identificador único da chave Pix no Asaas
     */
    protected ?string $key = null;

    /**
     * Tipo da chave
     */
    protected ?string $type = null;

    /**
     * Status da chave
     *
     * @see PixAddressKeyStatus
     */
    protected ?string $status = null;

    /**
     * Data de criação da chave
     */
    protected ?string $dateCreated = null;

    /**
     * Chave pode ser deletada
     */
    protected ?bool $canBeDeleted = null;

    /**
     * Motivo de não poder ser removida
    */
    protected ?string $cannotBeDeletedReason = null;

    /**
     * QrCode da chave Pix
    */
    protected ?QrCode $qrCode = null;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getKey(): ?string
    {
        return $this->key;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function getStatus(): ?PixAddressKeyStatus
    {
        return PixAddressKeyStatus::tryFrom($this->status);
    }

    public function getDateCreated(): ?string
    {
        return $this->dateCreated;
    }

    public function canBeDeleted(): ?bool
    {
        return $this->canBeDeleted;
    }

    public function getCannotBeDeletedReason(): ?string
    {
        return $this->cannotBeDeletedReason;
    }

    public function getQrCode(): ?QrCode
    {
        return $this->qrCode;
    }
}