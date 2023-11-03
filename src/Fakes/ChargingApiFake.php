<?php

declare(strict_types=1);

namespace Jetimob\Asaas\Fakes;

use Illuminate\Support\Collection;
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
use Jetimob\Asaas\Entity\Charging\ConfirmReceiptInCash;
use Jetimob\Asaas\Mocks\CreateChargingResponseMock;

class ChargingApiFake implements ChargingApiInterface
{
    /** @var Collection|ChargingResponse[] */
    protected Collection $chargings;

    protected string $token;

    public function __construct()
    {
        $this->token = fake()->uuid();
        $this->chargings = new Collection();
    }

    public function usingToken(string $token): self
    {
        $this->token = $token;
        return $this;
    }

    public function getToken(): string
    {
        return $this->token;
    }

    public function create(Charging $charging): CreateChargingResponse
    {
        $charging = CreateChargingResponse::deserialize(
            CreateChargingResponseMock::get($charging->toArray()),
        );

        $this->chargings->add($charging);
        return $charging;
    }

    public function find(string $id): FindChargingResponse
    {
        return $this->chargings->find(fn (ChargingResponse $charging) => $charging->getId() === $id);
    }

    public function update(string $id, Charging $charging): UpdateChargingResponse
    {
        // TODO: Implement update() method.
    }

    public function delete(string $id): DeleteChargingResponse
    {
        // TODO: Implement delete() method.
    }

    public function confirmReceiptInCash(string $id, ConfirmReceiptInCash $confirmReceiptInCash): ConfirmReceiptInCashResponse
    {
        // TODO: Implement confirmReceiptInCash() method.
    }

    public function undoReceiptInCash(string $id): UndoReceiptInCashResponse
    {
        // TODO: Implement undoReceiptInCash() method.
    }

    public function restore(string $id): RestoreChargingResponse
    {
        // TODO: Implement restore() method.
    }

    public function refund(string $id, float $value, string $description): RefundResponse
    {
        // TODO: Implement refund() method.
    }

    public function getChargings(): Collection
    {
        return $this->chargings;
    }

    public function getLastCharging(): ChargingResponse
    {
        return $this->chargings->last();
    }
}
