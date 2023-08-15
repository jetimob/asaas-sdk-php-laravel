<?php

namespace Jetimob\Asaas\Api;

use Jetimob\Asaas\Exceptions\AsaasRequestException;
use Jetimob\Http\Contracts\HttpProviderContract;

abstract class AbstractApi extends \Jetimob\Http\AbstractApi
{
    protected ?string $exceptionClass = AsaasRequestException::class;

    public function __construct(HttpProviderContract $httpProvider)
    {
        parent::__construct($httpProvider);
    }

    protected function makeBaseRequest($method, $path, array $headers = [], $body = null): AuthorizedRequest
    {
        if (!isset($headers['access_token'])) {
            $headers['access_token'] = config('asaas.http.access_token');
        }

        return new AuthorizedRequest($method, $path, $headers, $body);
    }
}