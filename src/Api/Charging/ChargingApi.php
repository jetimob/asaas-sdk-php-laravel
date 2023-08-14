<?php

namespace Jetimob\Asaas\Api\Charging;

use GuzzleHttp\RequestOptions;
use Jetimob\Asaas\Api\AbstractApi;
use Jetimob\Asaas\Entity\Charging;

class ChargingApi extends AbstractApi
{
    /**
     * {@see https://docs.asaas.com/reference/criar-nova-cobranca}
    */
    public function create(Charging $charging): CreateChargingResponse
    {
        return $this->mappedPost('payments', CreateChargingResponse::class, [
            RequestOptions::JSON => $charging,
        ]);
    }

    /**
     * {@see https://docs.asaas.com/reference/recuperar-uma-unica-cobranca}
    */
    public function find(string $id): FindChargingResponse
    {
        return $this->mappedGet("payments/$id", FindChargingResponse::class);
    }

    /**
     * {@see https://docs.asaas.com/reference/remover-cobranca}
    */
    public function delete(string $id): DeleteChargingResponse
    {
        return $this->mappedRequest(
            'delete',
            "payments/$id",
            DeleteChargingResponse::class,
            []
        );
    }
}
