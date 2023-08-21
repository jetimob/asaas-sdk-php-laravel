<?php

namespace Jetimob\Asaas\Entity;

abstract class Valuable extends Entity
{
    /** @var $value float */
    protected float $value;

    public function getValue(): float
    {
        return $this->value;
    }

    public function setValue(float $value): static
    {
        $this->value = $value;
        return $this;
    }

    public static function withValue(float $value): static
    {
        return (new static())->setValue($value);
    }
}
