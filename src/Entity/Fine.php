<?php

namespace Jetimob\Asaas\Entity;

class Fine extends Entity
{
    /**
     * Percentual de multa sobre o valor da cobrança para pagamento após o vencimento
     *
     * @var $value float
     */
    protected float $value;

    public function getValue(): float
    {
        return $this->value;
    }

    public function setValue(float $value): void
    {
        $this->value = $value;
    }
}