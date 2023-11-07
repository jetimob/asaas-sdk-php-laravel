<?php

 namespace Jetimob\Asaas\Entity\Charging;

use Jetimob\Asaas\Entity\Entity;

class CreditCard extends Entity
{
    /**
     * Nome impresso no cartão
     *
     * @var $holderName string|null
    */
    protected ?string $holderName = null;

    /**
     * Numero do cartão
     *
     * @var $number string|null
     */
    protected ?string $number = null;

    /**
     * Mẽs de expiração, (exemplo: 06)
     *
     * @var $expiryMonth string|null
     */
    protected ?string $expiryMonth = null;

    /**
     * Ano de expiração com 4 dígitos (ex: 2019)
     *
     * @var $expiryYear string|null
     */
    protected ?string $expiryYear = null;

    /**
     * Código de segurança
     *
     * @var $ccv string|null
     */
    protected ?string $ccv = null;

    public function getHolderName(): ?string
    {
        return $this->holderName;
    }

    public function setHolderName(?string $holderName): self
    {
        $this->holderName = $holderName;
        return $this;
    }

    public function getNumber(): ?string
    {
        return $this->number;
    }

    public function setNumber(?string $number): self
    {
        $this->number = $number;
        return $this;
    }

    public function getExpiryMonth(): ?string
    {
        return $this->expiryMonth;
    }

    public function setExpiryMonth(?string $expiryMonth): self
    {
        $this->expiryMonth = $expiryMonth;
        return $this;
    }

    public function getExpiryYear(): ?string
    {
        return $this->expiryYear;
    }

    public function setExpiryYear(?string $expiryYear): self
    {
        $this->expiryYear = $expiryYear;
        return $this;
    }

    public function getCcv(): ?string
    {
        return $this->ccv;
    }

    public function setCcv(?string $ccv): self
    {
        $this->ccv = $ccv;
        return $this;
    }
}
