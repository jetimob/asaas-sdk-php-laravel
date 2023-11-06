<?php

declare(strict_types=1);

namespace Jetimob\Asaas\Fakes;

use Jetimob\Asaas\Api\Transfer\FindTransferResponse;
use Jetimob\Asaas\Api\Transfer\RequestTransferResponse;
use Jetimob\Asaas\Contracts\TransferApiInterface;
use Jetimob\Asaas\Entity\Transfer\Transfer;
use Jetimob\Asaas\Mocks\RequestTransferResponseMock;

class TransferApiFake extends AbstractFakeApi implements TransferApiInterface
{
    public function requestTransfer(Transfer $transfer): RequestTransferResponse
    {
        $transfer = $this->makeResponse($transfer);

        $this->entities->add($transfer);

        return $transfer;
    }

    public function find(string $id): FindTransferResponse
    {
        return $this->entities->first(
            fn (RequestTransferResponse $transfer) => $transfer->getId() === $id
        );
    }

    protected function makeResponse(Transfer $transfer): RequestTransferResponse
    {
        return RequestTransferResponse::deserialize(
            RequestTransferResponseMock::get($transfer->toArray()),
        );
    }
}
