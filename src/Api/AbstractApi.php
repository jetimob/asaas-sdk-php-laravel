<?php

namespace Jetimob\Asaas\Api;

use Jetimob\Asaas\Exceptions\AsaasRequestException;
use Jetimob\Http\Contracts\HttpProviderContract;

abstract class AbstractApi extends \Jetimob\Http\AbstractApi
{
    protected ?string $exceptionClass = AsaasRequestException::class;
    protected string $accessToken;

    public function __construct(HttpProviderContract $httpProvider)
    {
        parent::__construct($httpProvider);
        $this->accessToken = config('asaas.http.access_token');
    }

    public function usingToken(string $token): self
    {
        $this->accessToken = $token;
        return $this;
    }

    protected function makeBaseRequest($method, $path, array $headers = [], $body = null): AuthorizedRequest
    {
        if (!isset($headers['access_token'])) {
            $headers['access_token'] = $this->accessToken;
        }

        return new AuthorizedRequest($method, $path, $headers, $body);
    }
}
