<?php

declare(strict_types=1);

namespace Jetimob\Asaas\Mocks;

use Jetimob\Asaas\Entity\Transfer\OperationType;
use Jetimob\Asaas\Entity\Transfer\TransferStatus;
use Jetimob\Asaas\Fakes\Utils;

class RequestTransferResponseMock extends AbstractMockResponse
{
    public static function get(array $overrides = []): array
    {
         return [
             'object' => 'transfer',
             'id' => fake()->uuid(),
             'type' => 'BANK_ACCOUNT',
             'dateCreated' => today()->format('Y-m-d'),
             'value' => fake()->randomFloat(),
             'netValue' => fake()->randomFloat(),
             'status' => TransferStatus::random()->value,
             'transferFee' => fake()->randomFloat(),
             'effectiveDate' => today(),
             'endToEndIdentifier' => fake()->uuid(),
             'scheduleDate' => today()->addDay(),
             'authorized' => fake()->boolean(),
             'failReason' => fake()->text(),
             'bankAccount' => [
                 'bank' => [
                     'ispb' => fake()->shuffleString('12345689'),
                     'code' => fake()->shuffleString('123'),
                     'name' => fake()->shuffleString('Bradesco'),
                 ],
                 'accountName' => fake()->shuffleString('Conta do Bradesco'),
                 'ownerName' => fake()->name(),
                 'cpfCnpj' => Utils::fakeCpf(),
                 'agency' => fake()->shuffleString('1234'),
                 'account' => fake()->shuffleString('9999991'),
                 'accountDigit' => (string) fake()->randomDigit(),
                 'pixAddressKey' => fake()->uuid(),
             ],
             'transactionReceiptUrl' => fake()->uuid(),
             'operationType' => OperationType::random()->value,
             'description' => fake()->text(),
             ...$overrides,
         ]; 
    }
}