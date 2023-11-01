<?php

namespace Jetimob\Asaas\Entity\Charging;

use Jetimob\Asaas\Entity\Valuable;

/** Percentual de multa sobre o valor da cobrança para pagamento após o vencimento */
class Fine extends Valuable
{
    protected ?string $type;

    public function getType(): ValueType
    {
        return ValueType::from($this->type);
    }

    public function setType(?ValueType $type): self
    {
        $this->type = $type;
        return $this;
    }

    public static function new(float $value, ValueType $type): Fine
    {
        return self::withValue($value)->setType($type);
    }
}
