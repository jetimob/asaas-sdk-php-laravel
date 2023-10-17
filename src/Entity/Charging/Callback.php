<?php

namespace Jetimob\Asaas\Entity\Charging;

use Jetimob\Asaas\Entity\Entity;

class Callback extends Entity
{
    /**
     * URL que o cliente será redirecionado após o pagamento com sucesso da fatura ou link de pagamento
     *
     * @var $successUrl string|null
    */
    protected ?string $successUrl;

    /**
     * Definir se o cliente será redirecionado automaticamente ou será apenas informado com um botão para retornar ao site.
     * O padrão é true, caso queira desativar informar false
     * @var $autoRedirect bool
    */
    protected bool $autoRedirect = true;

    public function getSuccessUrl(): ?string
    {
        return $this->successUrl;
    }

    public function setSuccessUrl(?string $successUrl): static
    {
        $this->successUrl = $successUrl;
        return $this;
    }

    public function isAutoRedirect(): bool
    {
        return $this->autoRedirect;
    }

    public function setAutoRedirect(bool $autoRedirect): static
    {
        $this->autoRedirect = $autoRedirect;
        return $this;
    }

    public static function new(string $accessUrl, bool $autoRedirect = true): static
    {
        return (new static())
            ->setSuccessUrl($accessUrl)
            ->setAutoRedirect($autoRedirect);
    }
}
