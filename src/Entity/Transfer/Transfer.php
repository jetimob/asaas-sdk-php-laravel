<?php

namespace Jetimob\Asaas\Entity\Transfer;

use Jetimob\Asaas\Entity\Entity;

class Transfer extends Entity
{
    /**
     * Valor a ser transferido
     *
     * @var $value float
    */
    protected float $value;

    /**
     * Dados da conta caso seja uma transferência para conta bancária
     *
     * @var $bankAccount BankAccount
    */
    protected BankAccount $bankAccount;

    /**
     * Modalidade da transferência.
     * Caso não informado e a instituição recebedora seja participante do Pix,
     * a transferência é via Pix. Do contrário via TED.
     *
     * Valores disponíveis em {@see OperationType}
     *
     * @var $operationType string
    */
    protected string $operationType;

    /**
     * Informe a chave Pix caso seja uma transferência para chave Pix
     *
     * @var $pixAddressKey string
    */
    protected string $pixAddressKey;

    /**
     * Informe o tipo de chave caso seja uma transferência para chave Pix
     * @var $pixAddressKeyType string // todo: Criar enum para tipos de chave pix
    */
    protected string $pixAddressKeyType;

    /**
     * Transferências via Pix permitem descrição
     *
     * @var $description string
    */
    protected string $description;

    /**
     * Para transferências agendadas, caso não informado o pagamento é instantâneo
     *
     * @var $scheduleDate string
    */
    protected string $scheduleDate;

    public function getValue(): float
    {
        return $this->value;
    }

    public function setValue(float $value): self
    {
        $this->value = $value;
        return $this;
    }

    public function getBankAccount(): BankAccount
    {
        return $this->bankAccount;
    }

    public function setBankAccount(BankAccount $bankAccount): self
    {
        $this->bankAccount = $bankAccount;
        return $this;
    }

    public function getOperationType(): string
    {
        return $this->operationType;
    }

    public function setOperationType(string $operationType): self
    {
        $this->operationType = $operationType;
        return $this;
    }

    public function getPixAddressKey(): string
    {
        return $this->pixAddressKey;
    }

    public function setPixAddressKey(string $pixAddressKey): self
    {
        $this->pixAddressKey = $pixAddressKey;
        return $this;
    }

    public function getPixAddressKeyType(): string
    {
        return $this->pixAddressKeyType;
    }

    public function setPixAddressKeyType(string $pixAddressKeyType): self
    {
        $this->pixAddressKeyType = $pixAddressKeyType;
        return $this;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function getScheduleDate(): string
    {
        return $this->scheduleDate;
    }

    public function setScheduleDate(string $scheduleDate): self
    {
        $this->scheduleDate = $scheduleDate;
        return $this;
    }
}
