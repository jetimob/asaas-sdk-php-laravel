<?php

namespace Jetimob\Asaas\Entity\Account;

use Illuminate\Support\Arr;
use Jetimob\Asaas\Entity\Entity;

class InvoiceCustomization extends Entity
{
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

    public function getLogoBackgroundColor(): string
    {
        return $this->logoBackgroundColor;
    }

    public function setLogoBackgroundColor(string $logoBackgroundColor): InvoiceCustomization
    {
        $this->logoBackgroundColor = $logoBackgroundColor;
        return $this;
    }

    public function getInfoBackgroundColor(): string
    {
        return $this->infoBackgroundColor;
    }

    public function setInfoBackgroundColor(string $infoBackgroundColor): InvoiceCustomization
    {
        $this->infoBackgroundColor = $infoBackgroundColor;
        return $this;
    }

    public function getFontColor(): string
    {
        return $this->fontColor;
    }

    public function setFontColor(string $fontColor): InvoiceCustomization
    {
        $this->fontColor = $fontColor;
        return $this;
    }

    public function isEnabled(): bool
    {
        return $this->enabled;
    }

    public function setEnabled(bool $enabled): InvoiceCustomization
    {
        $this->enabled = $enabled;
        return $this;
    }

    public function getLogoFile(): string
    {
        return $this->logoFile;
    }

    public function setLogoFile(string $logoFile): InvoiceCustomization
    {
        $this->logoFile = $logoFile;
        return $this;
    }

    public function toArray(): array
    {
        return [
            [
                'name' => 'logoBackgroundColor',
                'contents' => $this->getLogoBackgroundColor(),
            ],
            [
                'name' => 'infoBackgroundColor',
                'contents' => $this->getInfoBackgroundColor(),
            ],
            [
                'name' => 'fontColor',
                'contents' => $this->getFontColor(),
            ],
            [
                'name' => 'enabled',
                'contents' => $this->isEnabled() ? 'true' : 'false',
            ],
            [
                'name' => 'logoFile',
                'contents' => $this->getLogoFile(),
                'filename' => 'logo.png', // TODO: Ver necessidade de pegar o nome do arquivo dinamicamente
            ]
        ];
    }
}
