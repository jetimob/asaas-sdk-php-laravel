<?php

namespace Jetimob\Asaas\Api\Customer;

use Jetimob\Http\Response;

class TokenizeCreditCardResponse extends Response
{
    protected ?string $creditCardNumber;

    protected ?string $creditCardBrand;

    protected ?string $creditCardToken;

    public function getCreditCardNumber(): ?string
    {
        return $this->creditCardNumber;
    }

    public function getCreditCardBrand(): ?string
    {
        return $this->creditCardBrand;
    }

    public function getCreditCardToken(): ?string
    {
        return $this->creditCardToken;
    }
}
