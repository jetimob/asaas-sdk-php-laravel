<?php

namespace Jetimob\Asaas\Exceptions;

use GuzzleHttp\Exception\RequestException;
use Jetimob\Http\Contracts\HydratableContract;
use Jetimob\Http\Traits\Serializable;

class AsaasRequestException extends RequestException implements AsaasException, HydratableContract
{
    use Serializable;
}
