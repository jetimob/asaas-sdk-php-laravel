<?php

declare(strict_types=1);

namespace Jetimob\Asaas\Contracts;

use Jetimob\Asaas\Api\Charging\ConfirmReceiptInCashResponse;
use Jetimob\Asaas\Api\Charging\CreateChargingResponse;
use Jetimob\Asaas\Api\Charging\DeleteChargingResponse;
use Jetimob\Asaas\Api\Charging\FindChargingResponse;
use Jetimob\Asaas\Api\Charging\RefundResponse;
use Jetimob\Asaas\Api\Charging\RestoreChargingResponse;
use Jetimob\Asaas\Api\Charging\UndoReceiptInCashResponse;
use Jetimob\Asaas\Api\Charging\UpdateChargingResponse;
use Jetimob\Asaas\Entity\Charging\Charging;
use Jetimob\Asaas\Entity\Charging\ConfirmReceiptInCash;

/** @mixin \Jetimob\Asaas\Fakes\ChargingApiFake */
interface ChargingApiInterface
{
    public function create(Charging $charging): CreateChargingResponse;

    public function find(string $id): FindChargingResponse;

    public function update(string $id, Charging $charging): UpdateChargingResponse;

    public function delete(string $id): DeleteChargingResponse;

    public function confirmReceiptInCash(string $id, ConfirmReceiptInCash $confirmReceiptInCash): ConfirmReceiptInCashResponse;

    public function undoReceiptInCash(string $id): UndoReceiptInCashResponse;

    public function restore(string $id): RestoreChargingResponse;

    public function refund(string $id, float $value, string $description): RefundResponse;
}
