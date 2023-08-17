<?php

namespace Jetimob\Asaas\Entity;

class Discount extends Entity
{
    /**
     * Valor percentual ou fixo de desconto {@see DiscountType}, aplicado sobre o valor da cobrança
     *
     * @var $value int
     */
    protected int $value;

    /**
     * Dias antes do vencimento para aplicar o desconto
     *
     * @var $dueDateLimitDays int
     */
    protected int $dueDateLimitDays;

    /**
     * Tipos disponíveis no enum {@see DiscountType}
     * @var $type string
     */
    protected string $type;

    public function getValue(): int
    {
        return $this->value;
    }

    public function setValue(int $value): self
    {
        $this->value = $value;
        return $this;
    }

    public function getDueDateLimitDays(): int
    {
        return $this->dueDateLimitDays;
    }

    public function setDueDateLimitDays(int $dueDateLimitDays): self
    {
        $this->dueDateLimitDays = $dueDateLimitDays;
        return $this;
    }

    public function getType(): DiscountType
    {
        return DiscountType::from($this->type);
    }

    public function setType(string $type): self
    {
        $this->type = $type;
        return $this;
    }

    public static function new(float $value, string $type, int $dueDateLimitDays): static
    {
        return (new static())->setValue($value)->setDueDateLimitDays($dueDateLimitDays);
    }
}
