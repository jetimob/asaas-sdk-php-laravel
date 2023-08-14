<?php

namespace Jetimob\Asaas\Facades;

use Illuminate\Support\Facades\Facade;
use Jetimob\Asaas\Api\Charging\ChargingApi;
use Jetimob\Asaas\Api\Customer\CustomerApi;

/**
* @method static CustomerApi customer()
* @method static ChargingApi charging()
*/
class Asaas extends Facade
{
    public static function getFacadeAccessor(): string
    {
        return 'jetimob.asaas';
    }
}