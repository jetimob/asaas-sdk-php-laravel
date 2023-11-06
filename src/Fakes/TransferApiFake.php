<?php

declare(strict_types=1);

namespace Jetimob\Asaas\Fakes;

use Illuminate\Support\Collection;
use Jetimob\Asaas\Api\Transfer\FindTransferResponse;
use Jetimob\Asaas\Api\Transfer\RequestTransferResponse;
use Jetimob\Asaas\Contracts\TransferApiInterface;
use Jetimob\Asaas\Entity\Transfer\Transfer;
use Jetimob\Asaas\Mocks\RequestTransferResponseMock;

class TransferApiFake implements TransferApiInterface
{
    /** @var Collection|RequestTransferResponse[] */
    protected Collection $transfers;

    protected string $token;

    public function __construct()
    {
        $this->token = fake()->uuid();
        $this->transfers = new Collection();
    }

    public function requestTransfer(Transfer $transfer): RequestTransferResponse
    {
        $transfer = RequestTransferResponse::deserialize(
            RequestTransferResponseMock::get($transfer->toArray()),
        );

        $this->transfers->add($transfer);
        return $transfer;
    }

    public function find(string $id): FindTransferResponse
    {
        return $this->transfers->first(
            fn (RequestTransferResponse $t) => $t->getId() === $id
        );
    }

    public function getTransfers(): Collection
    {
        return $this->transfers;
    }

    public function getLastTransfer(): RequestTransferResponse
    {
        return $this->transfers->last();
    }
}
