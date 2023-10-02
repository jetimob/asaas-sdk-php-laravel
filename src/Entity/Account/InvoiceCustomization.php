<?php

namespace Jetimob\Asaas\Entity\Account;

use Jetimob\Asaas\Entity\Entity;

class InvoiceCustomization extends Entity
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
     * Cor da fonte das suas informações
     *
     * @var $fontColor string|null
     */
    protected ?string $fontColor;

    /**
     * True para habilitar a personalização
     *
     * @var bool|null
     */
    protected ?bool $enabled;

    /**
     * Logo que aparacerá no topo da fatura
     *
     * @var $logoFile string|null
     */
    protected ?string $logoFile;

    public function getLogoBackgroundColor(): ?string
    {
        return $this->logoBackgroundColor;
    }

    public function setLogoBackgroundColor(?string $logoBackgroundColor): self
    {
        $this->logoBackgroundColor = $logoBackgroundColor;
        return $this;
    }

    public function getInfoBackgroundColor(): ?string
    {
        return $this->infoBackgroundColor;
    }

    public function setInfoBackgroundColor(?string $infoBackgroundColor): self
    {
        $this->infoBackgroundColor = $infoBackgroundColor;
        return $this;
    }

    public function getFontColor(): ?string
    {
        return $this->fontColor;
    }

    public function setFontColor(?string $fontColor): self
    {
        $this->fontColor = $fontColor;
        return $this;
    }

    public function isEnabled(): ?bool
    {
        return $this->enabled;
    }

    public function setEnabled(?bool $enabled): self
    {
        $this->enabled = $enabled;
        return $this;
    }

    public function getLogoFile(): ?string
    {
        return $this->logoFile;
    }

    public function setLogoFile(?string $logoFile): self
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
