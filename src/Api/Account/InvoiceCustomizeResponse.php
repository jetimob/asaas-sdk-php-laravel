<?php

namespace Jetimob\Asaas\Api\Account;

use Jetimob\Http\Response;

class InvoiceCustomizeResponse extends Response
{
    /**
     * Cor de fundo da logo
     *
     * @var $logoBackgroundColor string|null
     */
    protected ?string $logoBackgroundColor;

    /**
     * Cor de fundo das suas informações
     *
     * @var $infoBackgroundColor string|null
     */
    protected ?string $infoBackgroundColor;

    /**
     * Cor da fonta das suas informações
     *
     * @var $fontColor string|null
     */
    protected ?string $fontColor;

    /**
     * True para habilitar a personalização
     *
     * @var $enabled bool|null
     */
    protected ?bool $enabled;

    /**
     * Logo que aparacerá no topo da fatura
     *
     * @var $logoFile string|null
     */
    protected ?string $logoFile;

    /**
     * @var $status string|null
    */
    protected ?string $status;

    public function getLogoBackgroundColor(): ?string
    {
        return $this->logoBackgroundColor;
    }

    public function getInfoBackgroundColor(): ?string
    {
        return $this->infoBackgroundColor;
    }

    public function getFontColor(): ?string
    {
        return $this->fontColor;
    }

    public function isEnabled(): ?bool
    {
        return $this->enabled;
    }

    public function getLogoFile(): ?string
    {
        return $this->logoFile;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }
}
