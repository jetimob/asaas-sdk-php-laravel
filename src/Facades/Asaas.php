<?php

namespace Jetimob\Asaas\Facades;

use Illuminate\Support\Facades\Facade;
use Jetimob\Asaas\Api\Account\AccountApi;
use Jetimob\Asaas\Api\Charging\ChargingApi;
use Jetimob\Asaas\Api\Transfer\TransferApi;
use Jetimob\Asaas\Api\Webhook\WebhookApi;
use Jetimob\Asaas\Contracts\CustomerApiInterface;
use Jetimob\Asaas\Fakes\AsaasFake;

/**
* @method static CustomerApiInterface customer()
* @method static ChargingApi charging()
* @method static AccountApi account()
* @method static TransferApi transfer()
* @method static WebhookApi webhook()
*/
class Asaas extends Facade
{
    public static function fake(): AsaasFake
    {
        self::swap($fake = new AsaasFake());

        return $fake;
    }

    public static function getFacadeAccessor(): string
    {
        return 'jetimob.asaas';
    }
}
