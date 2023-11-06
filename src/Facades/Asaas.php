<?php

namespace Jetimob\Asaas\Facades;

use Illuminate\Support\Facades\Facade;
use Jetimob\Asaas\Api\Webhook\WebhookApi;
use Jetimob\Asaas\Contracts\AccountApiInterface;
use Jetimob\Asaas\Contracts\ChargingApiInterface;
use Jetimob\Asaas\Contracts\CustomerApiInterface;
use Jetimob\Asaas\Contracts\TransferApiInterface;
use Jetimob\Asaas\Fakes\AsaasFake;

/**
* @method static CustomerApiInterface customer()
* @method static ChargingApiInterface charging()
* @method static AccountApiInterface account()
* @method static TransferApiInterface transfer()
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
