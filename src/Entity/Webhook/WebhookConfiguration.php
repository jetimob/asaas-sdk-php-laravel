<?php

namespace Jetimob\Asaas\Entity\Webhook;

use Jetimob\Asaas\Entity\Entity;

class WebhookConfiguration extends Entity
{

    /**
     * Nome para idetificar o webhook
     */
    protected ?string $name = null;

    /**
     * URL que receberá as informações de sincronização
     */
    protected ?string $url = null;

    /**
     * Email para receber as notificações em caso de erros na fila
     */
    protected ?string $email = null;

    /**
     * Método de envio: SEQUENTIALLY, NON_SEQUENTIALLY
     */
    protected ?string $sendType = null;

    /**
     * Versão utilizada da API. Utilize "3" para a versão v3
     */
    protected ?string $apiVersion = null;

    /**
     * Habilitar ou não o webhook
     */
    protected ?bool $enabled = null;

    /**
     * Situação da fila de sincronização
     */
    protected ?bool $interrupted = null;

    /**
     * Token de autenticação
     */
    protected ?string $authToken = null;

    /**
     * Eventos que o webhook deve enviar
     */
    protected ?array $events = null;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

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

    public function getSendType(): ?string
    {
        return $this->sendType;
    }

    public function setSendType(?string $sendType): self
    {
        $this->sendType = $sendType;
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

    public function getEvents(): ?array
    {
        return $this->events;
    }

    public function setEvents(?array $events): self
    {
        $this->events = $events;
        return $this;
    }
}
