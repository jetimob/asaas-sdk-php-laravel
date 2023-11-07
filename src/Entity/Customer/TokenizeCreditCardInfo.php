<?php

namespace Jetimob\Asaas\Entity\Customer;

use Jetimob\Asaas\Entity\Charging\CreditCard;
use Jetimob\Asaas\Entity\Charging\CreditCardHolderInfo;
use Jetimob\Asaas\Entity\Entity;

class TokenizeCreditCardInfo extends Entity
{
    /**
     * Id do cliente criado na Asaas
     *
     * @var $customer string|null
    */
    protected ?string $customer = null;

    /**
     * Informações do cartão de crédito
     *
     * @var $creditCard CreditCard|null
    */
    protected ?CreditCard $creditCard = null;

    /**
     * Informações do titular do cartão de crédito
     *
     * @var $creditCardHolderInfo CreditCardHolderInfo|null
     */
    protected ?CreditCardHolderInfo $creditCardHolderInfo = null;

    /**
     * IP de onde o cliente está fazendo a compra.
     * Não deve ser informado o IP do seu servidor.
     *
     * @var $remoteIp string|null
    */
    protected ?string $remoteIp = null;

    public  function getCustomer(): ?string
    {
        return $this->customer;
    }

    public function setCustomer(?string $customer): self
    {
        $this->customer = $customer;
        return $this;
    }

    public function getCreditCard(): ?CreditCard
    {
        return $this->creditCard;
    }

    public function setCreditCard(?CreditCard $creditCard): self
    {
        $this->creditCard = $creditCard;
        return $this;
    }

    public  function getCreditCardHolderInfo(): ?CreditCardHolderInfo
    {
        return $this->creditCardHolderInfo;
    }

    public function setCreditCardHolderInfo(?CreditCardHolderInfo $creditCardHolderInfo): self
    {
        $this->creditCardHolderInfo = $creditCardHolderInfo;
        return $this;
    }

    public function getRemoteIp(): ?string
    {
        return $this->remoteIp;
    }

    public function setRemoteIp(?string $remoteIp): self
    {
        $this->remoteIp = $remoteIp;
        return $this;
    }

    public static function forCustomer(string $customer): static
    {
        return with(new static())->setCustomer($customer);
    }
}
