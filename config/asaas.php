<?php

use Jetimob\Asaas\Api\Account\AccountApi;
use Jetimob\Asaas\Api\Charging\ChargingApi;
use Jetimob\Asaas\Api\Customer\CustomerApi;
use Jetimob\Asaas\Api\Transfer\TransferApi;
use Jetimob\Asaas\Api\Webhook\WebhookApi;

return [
    'http' => [
        // how many retries before we actually throw an exception?
        'retries' => 5,

        // on which status code we should consider retrying the request?
        'retry_on_status_code' => [],

        // before retrying a failed request, wait for the specified amount of time, in milliseconds
        'retry_delay' => 2000,

        // asaas's access token
        'access_token' => env('ASAAS_ACCESS_TOKEN', ''),


        // guzzle configuration, given to Guzzle instance as is
        'guzzle' => [
            'base_uri' => env('ASAAS_BASE_URI', 'https://sandbox.asaas.com/api/v3/'),

            // Number of seconds to wait while trying to connect to a server. 0 waits indefinitely.
            'connect_timeout' => 0.0,

            // Time needed to throw a timeout exception after a request is made.
            'timeout' => 0.0,

            // Set this to true if you want to debug the request/response.
            'debug' => false,

            'middlewares' => [
            ],
        ],
    ],

    'parent_wallet_id' => env('ASSAS_PARENT_WALLET_ID', ''),
    /*
    |--------------------------------------------------------------------------
    | Implementação dos endpoints da API
    |--------------------------------------------------------------------------
    |
    | Escolheu-se dar a opção de sobrescrever a implementação de um endpoint para que, se necessário, possam ser
    | modificados sem a necessidade de alterar o pacote original.
    |
    | A única obrigatoriedade é que a classe estenda \Jetimob\Asaas\Api\AbstractApi.
    |
    | Chaves também podem ser adicionadas neste vetor e assim serem chamadas direto da facade.
    |
    */
    'api_impl' => [
        'customer' => CustomerApi::class,
        'account'  => AccountApi::class,
        'charging' => ChargingApi::class,
        'transfer' => TransferApi::class,
        'webhook'  => WebhookApi::class,
    ],
];
