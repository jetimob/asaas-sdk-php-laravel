<?php

namespace Jetimob\Asaas\Entity\Webhook;

use Jetimob\Asaas\Entity\Entity;

class WebhookConfiguration extends Entity
{
    /**
     * URL que receberá as informações de sincronização
     *
     * @var $url string|null
    */
    protected ?string $url = null;

    /**
     * Email para receber as notificações em caso de erros na fila
     *
     * @var $email string|null
     */
    protected ?string $email = null;

    /**
     * Versão utilizada da API. Utilize "3" para a versão v3
     *
     * @var $apiVersion string|null
     */
    protected ?string $apiVersion = null;


    /**
     * Habilitar ou não o webhook
     *
     * @var $enabled bool|null
    */
    protected ?bool $enabled = null;

    /**
     * Situação da fila de sincronização
     *
     * @var $interrupted bool|null
     */
    protected ?bool $interrupted = null;

    /**
     * Token de autenticação
     *
     * @var $authToken string|null
    */
    protected ?string $authToken = null;

    /**
     * Tipo do Webhook
     *
     * @see WebhookType
     *
     * @var $type string|null
     */
    protected ?string $type = null;

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): self
    {
        $this->url = $url;
        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;
        return $this;
    }

    public function getApiVersion(): ?string
    {
        return $this->apiVersion;
    }

    public function setApiVersion(?string $apiVersion): self
    {
        $this->apiVersion = $apiVersion;
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

    public function isInterrupted(): ?bool
    {
        return $this->interrupted;
    }

    public function setInterrupted(?bool $interrupted): self
    {
        $this->interrupted = $interrupted;
        return $this;
    }

    public function getAuthToken(): ?string
    {
        return $this->authToken;
    }

    public function setAuthToken(?string $authToken): self
    {
        $this->authToken = $authToken;
        return $this;
    }

    public function getType(): ?WebhookType
    {
        return WebhookType::tryFrom($this->type);
    }

    public function setType(WebhookType $type): self
    {
        $this->type = $type->value;
        return $this;
    }
}
