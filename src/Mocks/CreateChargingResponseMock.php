<?php

namespace Jetimob\Asaas\Mocks;

use Jetimob\Asaas\Entity\Charging\BillingType;
use Jetimob\Asaas\Entity\Charging\ChargingStatus;
use Jetimob\Asaas\Entity\Charging\RefundStatus;

class CreateChargingResponseMock extends AbstractMockResponse
{
    public static function get(array $overrides = []): array
    {
        return [
            'object' => 'payment',
            'id' => fake()->uuid(),
            'dateCreated' => fake()->date(),
            'customer' => fake()->uuid(),
            'paymentLink' => fake()->url(),
            'dueDate' => fake()->date(),
            'value' => fake()->randomFloat(1, 10, 100),
            'netValue' => fake()->randomFloat(1, 10, 100),
            'billingType' => fake()->randomElement(BillingType::cases())->value,
            'canBePaidAfterDueDate' => fake()->boolean(),
            'pixTransaction' => fake()->uuid(),
            'status' => fake()->randomElement(ChargingStatus::cases())->value,
            'description' => fake()->text(),
            'externalReference' => fake()->postcode,
            'originalValue' => null,
            'interestValue' => null,
            'originalDueDate' => fake()->date(),
            'paymentDate' => null,
            'clientPaymentDate' => null,
            'installmentNumber' => null,
            'transactionReceiptUrl' => null,
            'nossoNumero' => fake()->shuffleString('12345'),
            'invoiceUrl' => fake()->url(),
            'bankSlipUrl' => fake()->url(),
            'invoiceNumber' => fake()->shuffleString('12345'),
            'discount' => [
                'value' => fake()->randomFloat(1, 10, 50),
                'dueDateLimitDays' => fake()->numberBetween(1, 5),
            ],
            'fine' => [
                'value' => fake()->randomFloat(1, 10, 50),
            ],
            'interest' => [
                'value' => fake()->randomFloat(1, 10, 50),
            ],
            'deleted' => fake()->boolean(),
            'postalService' => fake()->boolean(),
            'anticipated' => fake()->boolean(),
            'anticipable' => fake()->boolean(),
            'refunds' => [
                [
                    'dateCreated' => fake()->date(),
                    'status' => fake()->randomElement(RefundStatus::cases())->value,
                    'value' => fake()->randomFloat(1, 10, 50),
                    'description' => fake()->text(),
                    'transactionReceiptUrl' => fake()->url(),
                ]
            ],
            ...$overrides,
        ];
    }
}