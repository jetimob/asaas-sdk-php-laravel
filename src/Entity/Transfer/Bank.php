<?php

namespace Jetimob\Asaas\Entity\Transfer;

class Bank extends BankAccount
{
    /**
     * Código de compensação do banco no sistema bancário
     *
     * @var $code string|null
    */
    protected ?string $code;

    /**
     * @var $ispb string|null
    */
    protected ?string $ispb;

    /**
     * @var $name string|null
    */
    protected ?string $name;

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): self
    {
        $this->code = $code;
        return $this;
    }

    public function getIspb(): ?string
    {
        return $this->ispb;
    }

    public function setIspb(?string $ispb): self
    {
        $this->ispb = $ispb;
        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public static function new(string $code): static
    {
        return with(new static())->setCode($code);
    }
}
