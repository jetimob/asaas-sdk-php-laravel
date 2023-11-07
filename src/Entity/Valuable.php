<?php

namespace Jetimob\Asaas\Entity;

abstract class Valuable extends Entity
{
    /** @var $value float|null */
    protected ?float $value = null;

    public function getValue(): ?float
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
        return with(new static())->setValue($value);
    }
}
