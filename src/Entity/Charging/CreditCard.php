<?php

 namespace Jetimob\Asaas\Entity\Charging;

use Jetimob\Asaas\Entity\Entity;

class CreditCard extends Entity
{
    /**
     * Nome impresso no cartão
     *
     * @var $holderName string
    */
    protected string $holderName;

    /**
     * Numero do cartão
     *
     * @var $number string
     */
    protected string $number;

    /**
     * Mẽs de expiração, (exemplo: 06)
     *
     * @var $expiryMonth string
     */
    protected string $expiryMonth;

    /**
     * Ano de expiração com 4 dígitos (ex: 2019)
     *
     * @var $expiryYear string
     */
    protected string $expiryYear;

    /**
     * Código de segurança
     *
     * @var $ccv string
     */
    protected string $ccv;

    public function getHolderName(): string
    {
        return $this->holderName;
    }

    public function getNumber(): string
    {
        return $this->number;
    }

    public function getExpiryMonth(): string
    {
        return $this->expiryMonth;
    }

    public function getExpiryYear(): string
    {
        return $this->expiryYear;
    }

    public function getCcv(): string
    {
        return $this->ccv;
    }

    public function setHolderName(string $holderName): self
    {
        $this->holderName = $holderName;
        return $this;
    }

    public function setNumber(string $number): self
    {
        $this->number = $number;
        return $this;
    }

    public function setExpiryMonth(string $expiryMonth): self
    {
        $this->expiryMonth = $expiryMonth;
        return $this;
    }

    public function setExpiryYear(string $expiryYear): self
    {
        $this->expiryYear = $expiryYear;
        return $this;
    }

    public function setCcv(string $ccv): self
    {
        $this->ccv = $ccv;
        return $this;
    }
}
