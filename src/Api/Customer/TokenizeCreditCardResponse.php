<?php

namespace Jetimob\Asaas\Api\Customer;

use Jetimob\Http\Response;

class TokenizeCreditCardResponse extends Response
{
    /**
     * @var $creditCardNumber string
    */
    protected string $creditCardNumber;

    /**
     * @var $creditCardBrand string
    */
    protected string $creditCardBrand;

    /**
     * @var $creditCardToken string
    */
    protected string $creditCardToken;

    public  function getCreditCardNumber(): string
    {
        return $this->creditCardNumber;
    }
    public  function getCreditCardBrand(): string
    {
        return $this->creditCardBrand;
    }
    public  function getCreditCardToken(): string
    {
        return $this->creditCardToken;
    }
}
