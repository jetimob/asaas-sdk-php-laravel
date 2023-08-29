<?php

namespace Jetimob\Asaas\Api\Account;

use Jetimob\Http\Response;

class InvoiceCustomizeResponse extends Response
{
    protected string $object;

    /**
     * Cor de fundo da logo
     *
     * @var string
     */
    protected string $logoBackgroundColor;

    /**
     * Cor de fundo das suas informações
     *
     * @var string
     */
    protected string $infoBackgroundColor;

    /**
     * Cor da fonta das suas informações
     * Cor
     * @var string
     */
    protected string $fontColor;

    /**
     * True para habilitar a personalização
     *
     * @var bool
     */
    protected bool $enabled;

    /**
     * Logo que aparacerá no topo da fatura
     *
     * @var string
     */
    protected string $logoFile;

    /**
     * @var $status string
    */
    protected string $status;

    public function getLogoBackgroundColor(): string
    {
        return $this->logoBackgroundColor;
    }

    public function getInfoBackgroundColor(): string
    {
        return $this->infoBackgroundColor;
    }

    public function getFontColor(): string
    {
        return $this->fontColor;
    }

    public function isEnabled(): bool
    {
        return $this->enabled;
    }

    public function getLogoFile(): string
    {
        return $this->logoFile;
    }

    public function getStatus(): string
    {
        return $this->status;
    }
}
