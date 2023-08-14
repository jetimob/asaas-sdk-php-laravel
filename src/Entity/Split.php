<?php

namespace Jetimob\Asaas\Entity;

class Split extends Entity
{
    /**
     * Identificador da carteira (retornado no momento da criação da conta)
     *
     * @var $walledId string
    */
    protected string $walledId;

    /**
     * Valor fixo a ser transferido para a conta quando a cobrança for recebida
     *
     * @var $fixedValue float|null
    */
    protected ?float $fixedValue;

    /**
     * Percentual sobre o valor líquido da cobrança a ser transferido quando for recebida
     *
     * @var $percetualValue float|null
    */
    protected ?float $percetualValue;
}