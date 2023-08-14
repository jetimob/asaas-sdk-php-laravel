<?php

namespace Jetimob\Asaas\Entity;

class Interest extends Entity
{
    /**
     * Percentual de juros ao mês sobre o valor da cobrança para pagamento após o vencimento
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