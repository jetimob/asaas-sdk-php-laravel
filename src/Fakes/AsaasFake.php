<?php

declare(strict_types=1);

namespace Jetimob\Asaas\Fakes;

use Jetimob\Asaas\Contracts\AccountApiInterface;
use Jetimob\Asaas\Contracts\AsaasInterface;
use Jetimob\Asaas\Contracts\CustomerApiInterface;

class AsaasFake implements AsaasInterface
{
    public static function customer(): CustomerApiInterface
    {
        return resolve(CustomerApiFake::class);
    }

    public static function account(): AccountApiInterface
    {
        return resolve(AccountApiFake::class);
    }
}