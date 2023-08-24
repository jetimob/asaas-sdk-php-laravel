<?php

namespace Jetimob\Asaas\Api\Transfer;

use GuzzleHttp\RequestOptions;
use Jetimob\Asaas\Api\AbstractApi;
use Jetimob\Asaas\Entity\Transfer\Transfer;

class TransferApi extends AbstractApi
{
    public function requestTransfer(Transfer $transfer): RequestTransferResponse
    {
        return $this->mappedPost('transfer', RequestTransferResponse::class, [
            RequestOptions::JSON => $transfer,
        ]);
    }

    public function find(string $id): FindTransferResponse
    {
        return $this->mappedGet("transfer/$id", FindTransferResponse::class);
    }
}
