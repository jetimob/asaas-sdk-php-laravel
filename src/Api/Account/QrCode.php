<?php

declare(strict_types=1);

namespace Jetimob\Asaas\Api\Account;

use Jetimob\Asaas\Entity\Entity;

class QrCode extends Entity
{
    /** Imagem do QrCode em base64 */
    protected ?string $encodedImage = null;

    /** Copia e cola do QrCode */
    protected ?string $payload = null;

    public function getEncodedImage(): ?string
    {
        return $this->encodedImage;
    }

    public function getPayload(): ?string
    {
        return $this->payload;
    }
}