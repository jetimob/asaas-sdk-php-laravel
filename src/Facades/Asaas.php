<?php

namespace Jetimob\Asaas\Facades;

use Illuminate\Support\Facades\Facade;
use Jetimob\Asaas\Api\Account\AccountApi;
use Jetimob\Asaas\Api\Charging\ChargingApi;
use Jetimob\Asaas\Api\Customer\CustomerApi;
use Jetimob\Asaas\Api\Transfer\TransferApi;

/**
* @method static CustomerApi customer()
* @method static ChargingApi charging()
* @method static AccountApi account()
* @method static TransferApi transfer()
*/
class Asaas extends Facade
{
    public static function getFacadeAccessor(): string
    {
        return 'jetimob.asaas';
    }
}