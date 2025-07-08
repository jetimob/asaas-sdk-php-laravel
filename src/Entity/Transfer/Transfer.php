<?php

declare(strict_types=1);

namespace Jetimob\Asaas\Entity\Transfer;

use Jetimob\Asaas\Entity\Charging\PixKeyType;
use Jetimob\Asaas\Entity\Entity;

class Transfer extends Entity
{
    /**
     * Valor a ser transferido
     *
     * @var $value float|null
    */
    protected ?float $value = null;

    /**
     * Dados da conta caso seja uma transferência para conta bancária
     *
     * @var $bankAccount BankAccount|null
    */
    protected ?BankAccount $bankAccount = null;

    /**
     * Modalidade da transferência.
     * Caso não informado e a instituição recebedora seja participante do Pix,
     * a transferência é via Pix. Do contrário via TED.
     *
     * Valores disponíveis em {@see OperationType}
     *
     * @var $operationType string|null
    */
    protected ?string $operationType = null;

    /**
     * Informe a chave Pix caso seja uma transferência para chave Pix
     *
     * @var $pixAddressKey string|null
    */
    protected ?string $pixAddressKey = null;

    /**
     * Informe o tipo de chave caso seja uma transferência para chave Pix
     *
     * Valores disponíveis em {@see PixKeyType}
     * @var $pixAddressKeyType string|null
    */
    protected ?string $pixAddressKeyType = null;

    /**
     * Transferência entre contas Asaas
     * Só é possível fazer transferência entre contas Asaas para contas que possuam vínculo entre si,
     * como conta raiz e subconta, ou duas subcontas de mesma conta raiz.
     *
     * @var $walletId string|null
     */
    protected ?string $walletId = null;

    /**
     * Transferências via Pix permitem descrição
     *
     * @var $description string|null
    */
    protected ?string $description = null;

    /**
     * Para transferências agendadas, caso não informado o pagamento é instantâneo
     *
     * @var $scheduleDate string|null
    */
    protected ?string $scheduleDate = null;

    /**
     * Identificador da transferência no seu sistema
     *
     * @var $externalReference string|null
     */
    protected ?string $externalReference = null;

    public function getValue(): ?float
    {
        return $this->value;
    }

    public function setValue(?float $value): self
    {
        $this->value = $value;
        return $this;
    }

    public function getBankAccount(): ?BankAccount
    {
        return $this->bankAccount;
    }

    public function setBankAccount(?BankAccount $bankAccount): self
    {
        $this->bankAccount = $bankAccount;
        return $this;
    }

    public function getOperationType(): ?OperationType
    {
        return OperationType::tryFrom($this->operationType);
    }

    public function setOperationType(?string $operationType): self
    {
        $this->operationType = $operationType;
        return $this;
    }

    public function getPixAddressKey(): string
    {
        return $this->pixAddressKey;
    }

    public function setPixAddressKey(?string $pixAddressKey): self
    {
        $this->pixAddressKey = $pixAddressKey;
        return $this;
    }

    public function getPixAddressKeyType(): ?PixKeyType
    {
        return PixKeyType::tryFrom($this->pixAddressKeyType);
    }

    public function setPixAddressKeyType(?string $pixAddressKeyType): self
    {
        $this->pixAddressKeyType = $pixAddressKeyType;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function getScheduleDate(): ?string
    {
        return $this->scheduleDate;
    }

    public function setScheduleDate(?string $scheduleDate): self
    {
        $this->scheduleDate = $scheduleDate;
        return $this;
    }

    public function getWalletId(): ?string
    {
        return $this->walletId;
    }

    public function setWalletId(?string $walletId): Transfer
    {
        $this->walletId = $walletId;
        return $this;
    }

    public function getExternalReference(): ?string
    {
        return $this->externalReference;
    }

    public function setExternalReference(?string $externalReference): Transfer
    {
        $this->externalReference = $externalReference;
        return $this;
    }
}
