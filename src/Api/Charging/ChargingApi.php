<?php

namespace Jetimob\Asaas\Api\Charging;

use GuzzleHttp\RequestOptions;
use Jetimob\Asaas\Api\AbstractApi;
use Jetimob\Asaas\Entity\Charging;

class ChargingApi extends AbstractApi
{
    public function create(Charging $charging): CreateChargingResponse
    {
        return $this->mappedPost('payments', CreateChargingResponse::class, [
            RequestOptions::JSON => $charging,
        ]);
    }
}