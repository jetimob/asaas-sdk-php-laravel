<?php

namespace Jetimob\Asaas\Entity\Webhook;

use Jetimob\Asaas\Entity\Entity;

class WebhookConfiguration extends Entity
{
    /**
     * URL que receberá as informações de sincronização
     *
     * @var $url string
    */
    protected string $url;

    /**
     * Email para receber as notificações em caso de erros na fila
     *
     * @var $email string
     */
    protected string $email;

    /**
     * Versão utilizada da API. Utilize "3" para a versão v3
     *
     * @var $apiVersion string
     */
    protected string $apiVersion;


    /**
     * Habilitar ou não o webhook
     *
     * @var $enabled bool
    */
    protected bool $enabled;

    /**
     * Situação da fila de sincronização
     *
     * @var $interrupted bool
     */
    protected bool $interrupted;

    /**
     * Token de autenticação
     *
     * @var $authToken string
    */
    protected string $authToken;

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setUrl(string $url): self
    {
        $this->url = $url;
        return $this;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;
        return $this;
    }

    public function getApiVersion(): string
    {
        return $this->apiVersion;
    }

    public function setApiVersion(string $apiVersion): self
    {
        $this->apiVersion = $apiVersion;
        return $this;
    }

    public function isEnabled(): bool
    {
        return $this->enabled;
    }

    public function setEnabled(bool $enabled): self
    {
        $this->enabled = $enabled;
        return $this;
    }

    public function isInterrupted(): bool
    {
        return $this->interrupted;
    }

    public function setInterrupted(bool $interrupted): self
    {
        $this->interrupted = $interrupted;
        return $this;
    }

    public function getAuthToken(): string
    {
        return $this->authToken;
    }

    public function setAuthToken(string $authToken): self
    {
        $this->authToken = $authToken;
        return $this;
    }
}
