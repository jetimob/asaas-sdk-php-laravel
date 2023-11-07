<?php

namespace Jetimob\Asaas\Entity\Charging;

use Jetimob\Asaas\Entity\Entity;

class Split extends Entity
{
    /**
     * Identificador da carteira (retornado no momento da criação da conta)
     *
     * @var $walletId string|null
    */
    protected ?string $walletId = null;

    /**
     * Valor fixo a ser transferido para a conta quando a cobrança for recebida
     *
     * @var $fixedValue float|null
    */
    protected ?float $fixedValue = null;

    /**
     * Percentual sobre o valor líquido da cobrança a ser transferido quando for recebida
     *
     * @var $percetualValue float|null
    */
    protected ?float $percetualValue = null;

    public function setWalletId(?string $walletId): self
    {
        $this->walletId = $walletId;
        return $this;
    }

    public function getWalletId(): ?string
    {
        return $this->walletId;
    }

    public function setFixedValue(?float $fixedValue): self
    {
        $this->fixedValue = $fixedValue;
        return $this;
    }

    public function getFixedValue(): ?float
    {
        return $this->fixedValue;
    }

    public function setPercentualValue(?float $percentualValue): self
    {
        $this->percetualValue = $percentualValue;
        return $this;
    }

    public function getPercentualValue(): ?float
    {
        return $this->percetualValue;
    }

    public static function new(
        string $walletId,
        ?float $fixedValue = null,
        ?float $percentualValue = null
    ): static {
        return with(new static)
            ->setWalletId($walletId)
            ->setFixedValue($fixedValue)
            ->setPercentualValue($percentualValue);
    }
}
