<?php

namespace Jetimob\Asaas\Entity\Charging;

use Jetimob\Asaas\Entity\Entity;

class Discount extends Entity
{
    /**
     * Valor percentual ou fixo de desconto {@see DiscountType}, aplicado sobre o valor da cobrança
     *
     * @var $value float|null
     */
    protected ?float $value = null;

    /**
     * Dias antes do vencimento para aplicar o desconto
     *
     * @var $dueDateLimitDays int|null
     */
    protected ?int $dueDateLimitDays = null;

    /**
     * Tipos disponíveis no enum {@see DiscountType}
     * @var $type string|null
     */
    protected ?string $type = null;

    public function getValue(): ?float
    {
        return $this->value;
    }

    public function setValue(int $value): self
    {
        $this->value = $value;
        return $this;
    }

    public function getDueDateLimitDays(): ?int
    {
        return $this->dueDateLimitDays;
    }

    public function setDueDateLimitDays(?int $dueDateLimitDays): self
    {
        $this->dueDateLimitDays = $dueDateLimitDays;
        return $this;
    }

    public function getType(): ?DiscountType
    {
        return DiscountType::tryFrom($this->type);
    }

    public function setType(?string $type): self
    {
        $this->type = $type;
        return $this;
    }

    public static function new(float $value, string $type, int $dueDateLimitDays): static
    {
        return with(new static())->setValue($value)->setType($type)->setDueDateLimitDays($dueDateLimitDays);
    }
}
