<?php

namespace Jetimob\Asaas\Entity\Charging;

use Jetimob\Asaas\Entity\Entity;

class ConfirmReceiptInCash extends Entity
{
    /**
     * Data em que o cliente efetuou o pagamento
     *
     * @var $paymentDate string|null
     */
    protected ?string $paymentDate = null;


    /***
     * Valor pago pelo cliente
     *
     * @var $value float|null
     */
    protected ?float $value = null;

    /**
     * Enviar ou não notificação de pagamento confirmado para o cliente
     *
     * @var $notifyCustomer bool|null
    */
    protected ?bool $notifyCustomer = null;

    public function getPaymentDate(): ?string
    {
        return $this->paymentDate;
    }

    public function setPaymentDate(?string $paymentDate): self
    {
        $this->paymentDate = $paymentDate;
        return $this;
    }

    public function getValue(): ?float
    {
        return $this->value;
    }

    public function setValue(?float $value): self
    {
        $this->value = $value;
        return $this;
    }

    public function getNotifyCustomer(): ?bool
    {
        return $this->notifyCustomer;
    }

    public function setNotifyCustomer(?bool $notifyCustomer): self
    {
        $this->notifyCustomer = $notifyCustomer;
        return $this;
    }
}
