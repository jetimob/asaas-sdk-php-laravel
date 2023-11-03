<?php

namespace Jetimob\Asaas\Tests\Mocks;

use Jetimob\Asaas\Entity\Webhook\TransferEvent;

class TransferWebhookEventMock extends AbstractMockResponse
{
    public static function get(array $overrides = []): array
    {
        return [
            'event' => TransferEvent::TRANSFER_CREATED->value,
            'transfer' => [
                'object' => 'transfer',
                'id' => fake()->uuid,
                'dateCreated' => fake()->date,
                'status' => 'PENDING',
                'effectiveDate' => null,
                'endToEndIdentifier' => null,
                'type' => 'BANK_ACCOUNT',
                'value' => fake()->randomFloat(2, 100, 10000),
                'netValue' => fake()->randomFloat(2, 100, 10000),
                'transferFee' => 0,
                'scheduleDate' => fake()->date,
                'authorized' => true,
                'failReason' => null,
                'transactionReceiptUrl' => null,
                'bankAccount' => [
                    'bank' => [
                        'ispb' => '00000000',
                        'code' => '001',
                        'name' => 'Banco do Brasil'
                    ],
                    'accountName' => 'Conta Banco do Brasil',
                    'ownerName' => fake()->name,
                    'cpfCnpj' => fake()->numerify('***.###.###-##'),
                    'agency' => fake()->numerify('####'),
                    'agencyDigit' => fake()->numerify('#'),
                    'account' => fake()->numerify('########'),
                    'accountDigit' => fake()->numerify('#'),
                    'pixAddressKey' => null
                ],
                'operationType' => 'TED',
                'description' => null
            ],
            ...$overrides,
        ];
    }

}
