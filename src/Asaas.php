<?php

namespace Jetimob\Asaas;

use Jetimob\Http\Contracts\HttpProviderContract;
use Jetimob\Http\Http;
use RuntimeException;

class Asaas implements HttpProviderContract
{
    protected Http $client;
    protected array $config;

    public function __construct(array $config = [])
    {
        $this->client = new Http($config['http'] ?? []);
        $this->config = $config;
    }

    public function getHttpInstance(): Http
    {
        return $this->client;
    }

    public function __call(string $name, array $arguments)
    {
        if (!($apiImpl = $this->config['api_impl'] ?? null) || !array_key_exists($name, $apiImpl)) {
            throw new RuntimeException("O endpoint '$name' não foi implementado ou não existe");
        }

        return new $apiImpl[$name]($this);
    }
}