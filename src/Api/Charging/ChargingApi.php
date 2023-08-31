<?php

namespace Jetimob\Asaas\Api\Charging;

use GuzzleHttp\RequestOptions;
use Jetimob\Asaas\Api\AbstractApi;
use Jetimob\Asaas\Entity\Charging\Charging;
use Jetimob\Asaas\Entity\Charging\ConfirmReceiptInCash;

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
     * {@see https://docs.asaas.com/reference/atualizar-cobranca-existente}
    */
    public function update(string $id, Charging $charging): UpdateChargingResponse
    {
        return $this->mappedPost("payments/$id", UpdateChargingResponse::class, [
            RequestOptions::JSON => $charging,
        ]);
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

    /** {@see https://docs.asaas.com/reference/confirmar-recebimento-em-dinheiro} */
    public function confirmReceiptInCash(string $id, ConfirmReceiptInCash $confirmReceiptInCash): ConfirmReceiptInCashResponse
    {
        return $this->mappedPost("payments/$id/receiveInCash", ConfirmReceiptInCashResponse::class, [
            RequestOptions::JSON => $confirmReceiptInCash,
        ]);
    }

    /** {@see https://docs.asaas.com/reference/desfazer-confirmacao-de-recebimento-em-dinheiro} */
    public function undoReceiptInCash(string $id): UndoReceiptInCashResponse
    {
        return $this->mappedPost("payments/$id/undoReceivedInCash", UndoReceiptInCashResponse::class);
    }

    /** {@see https://docs.asaas.com/reference/restaurar-cobranca-removida} */
    public function restore(string $id): RestoreChargingResponse
    {
        return $this->mappedPost("payments/$id/restore", RestoreChargingResponse::class);
    }

    /** {@see https://docs.asaas.com/reference/estornar-cobranca} */
    public function refund(string $id, float $value, string $description): RefundResponse
    {
        return $this->mappedPost("payments/$id/refund", RefundResponse::class, [
            RequestOptions::JSON => [
                'value' => $value,
                'description' => $description,
            ],
        ]);
    }
}
