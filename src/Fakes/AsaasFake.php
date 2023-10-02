<?php

namespace Jetimob\Asaas\Fakes;

use Jetimob\Asaas\Contracts\AsaasInterface;
use Jetimob\Asaas\Contracts\CustomerApiInterface;

class AsaasFake implements AsaasInterface
{
    public static function customer(): CustomerApiInterface
    {
        return app(CustomerApiFake::class);
    }
}