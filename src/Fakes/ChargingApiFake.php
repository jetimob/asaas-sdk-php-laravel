<?php

declare(strict_types=1);

namespace Jetimob\Asaas\Fakes;

use Jetimob\Asaas\Api\Charging\ChargingResponse;
use Jetimob\Asaas\Api\Charging\ConfirmReceiptInCashResponse;
use Jetimob\Asaas\Api\Charging\CreateChargingResponse;
use Jetimob\Asaas\Api\Charging\DeleteChargingResponse;
use Jetimob\Asaas\Api\Charging\FindChargingResponse;
use Jetimob\Asaas\Api\Charging\RefundResponse;
use Jetimob\Asaas\Api\Charging\RestoreChargingResponse;
use Jetimob\Asaas\Api\Charging\UndoReceiptInCashResponse;
use Jetimob\Asaas\Api\Charging\UpdateChargingResponse;
use Jetimob\Asaas\Contracts\ChargingApiInterface;
use Jetimob\Asaas\Entity\Charging\Charging;
use Jetimob\Asaas\Entity\Charging\ChargingStatus;
use Jetimob\Asaas\Entity\Charging\ConfirmReceiptInCash;
use Jetimob\Asaas\Mocks\CreateChargingResponseMock;

class ChargingApiFake extends AbstractFakeApi implements ChargingApiInterface
{
    public function create(Charging $charging): CreateChargingResponse
    {
        $charging = $this->makeResponse($charging->toArray());

        $this->entities->add($charging);


        return $charging;
    }

    public function find(string $id): FindChargingResponse
    {
        /** @var ChargingResponse $charging */
        $charging = $this->entities->first(
            fn (ChargingResponse $charging) => $charging->getId() === $id
        );

        return FindChargingResponse::deserialize($charging->toArray());
    }

    public function pay(string $id): void
    {
        $this->entities->transform(function (ChargingResponse $response) use ($id) {
            if ($response->getId() === $id) {
                $response = $this->makeResponse([
                    ...$response->toArray(),
                    'paymentDate' => now()->format('Y-m-d'),
                    'status' => ChargingStatus::RECEIVED->value,
                ]);
            }

            return $response;
        });
    }

    public function update(string $id, Charging $charging): UpdateChargingResponse
    {
        throw new \Exception('Not implemented');
    }

    public function delete(string $id): DeleteChargingResponse
    {
        throw new \Exception('Not implemented');
    }

    public function confirmReceiptInCash(string $id, ConfirmReceiptInCash $confirmReceiptInCash): ConfirmReceiptInCashResponse
    {
        throw new \Exception('Not implemented');
    }

    public function undoReceiptInCash(string $id): UndoReceiptInCashResponse
    {
        throw new \Exception('Not implemented');
    }

    public function restore(string $id): RestoreChargingResponse
    {
        throw new \Exception('Not implemented');
    }

    public function refund(string $id, float $value, string $description): RefundResponse
    {
        throw new \Exception('Not implemented');
    }

    protected function makeResponse(array $charging): CreateChargingResponse
    {
        return CreateChargingResponse::deserialize(
            CreateChargingResponseMock::get($charging)
        );
    }
}
