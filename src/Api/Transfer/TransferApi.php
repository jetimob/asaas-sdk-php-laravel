<?php

namespace Jetimob\Asaas\Api\Transfer;

use GuzzleHttp\RequestOptions;
use Jetimob\Asaas\Api\AbstractApi;
use Jetimob\Asaas\Contracts\TransferApiInterface;
use Jetimob\Asaas\Entity\Transfer\Transfer;

class TransferApi extends AbstractApi implements TransferApiInterface
{
    public function requestTransfer(Transfer $transfer): RequestTransferResponse
    {
        return $this->mappedPost('transfers', RequestTransferResponse::class, [
            RequestOptions::JSON => $transfer,
        ]);
    }

    public function find(string $id): FindTransferResponse
    {
        return $this->mappedGet("transfers/$id", FindTransferResponse::class);
    }
}
