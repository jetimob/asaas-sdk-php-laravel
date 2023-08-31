<?php

namespace Jetimob\Asaas\Entity\Transfer;

use Jetimob\Asaas\Entity\Charging\ChargeBackReason;
use Jetimob\Asaas\Entity\Charging\ChargeBackStatus;
use Jetimob\Asaas\Tests\Mocks\AbstractMockResponse;

class ChargingWebhookEventMock extends AbstractMockResponse
{
    public static function get(array $overrides = []): array
    {
        return [
            'event' => 'PAYMENT_RECEIVED',
            'payment' => [
                'object' => 'payment',
                'id' => fake()->uuid,
                'dateCreated' => fake()->date,
                'customer' => 'cus_' . fake()->bothify('????????????'),
                'subscription' => 'sub_' . fake()->bothify('????????????'),
                'installment' => fake()->uuid,
                'paymentLink' => fake()->numerify('###########'),
                'dueDate' => fake()->date,
                'originalDueDate' => fake()->date,
                'value' => fake()->randomFloat(2, 50, 200),
                'netValue' => fake()->randomFloat(2, 45, 190),
                'originalValue' => null,
                'interestValue' => null,
                'description' => fake()->sentence,
                'externalReference' => fake()->numerify('######'),
                'billingType' => 'CREDIT_CARD',
                'status' => 'RECEIVED',
                'pixTransaction' => null,
                'confirmedDate' => fake()->date,
                'paymentDate' => fake()->date,
                'clientPaymentDate' => fake()->date,
                'installmentNumber' => null,
                'creditDate' => fake()->date,
                'estimatedCreditDate' => fake()->date,
                'invoiceUrl' => 'https://www.asaas.com/i/' . fake()->numerify('###########'),
                'bankSlipUrl' => null,
                'transactionReceiptUrl' => 'https://www.asaas.com/comprovantes/' . fake()->numerify('################'),
                'invoiceNumber' => '0000' . fake()->numerify('##'),
                'deleted' => false,
                'anticipated' => false,
                'anticipable' => false,
                'lastInvoiceViewedDate' => fake()->dateTime->format('Y-m-d H:i:s'),
                'lastBankSlipViewedDate' => null,
                'postalService' => false,
                'creditCard' => [
                    'creditCardNumber' => fake()->creditCardNumber,
                    'creditCardBrand' => fake()->creditCardType,
                    'creditCardToken' => fake()->uuid,
                ],
                'discount' => [
                    'value' => 0.00,
                    'dueDateLimitDays' => 0,
                    'type' => 'FIXED',
                ],
                'fine' => [
                    'value' => 0.00,
                    'type' => 'FIXED',
                ],
                'interest' => [
                    'value' => 0.00,
                    'type' => 'PERCENTAGE',
                ],
                'split' => [
                    [
                        'walletId' => fake()->uuid,
                        'fixedValue' => fake()->randomFloat(2, 10, 30),
                        'status' => 'PENDING',
                        'refusalReason' => null,
                    ],
                    [
                        'walletId' => fake()->uuid,
                        'percentualValue' => fake()->randomFloat(2, 5, 20),
                        'status' => 'PENDING',
                        'refusalReason' => null,
                    ],
                ],
                'chargeback' => [
                    'status' => fake()->randomElement(ChargeBackStatus::cases())->value,
                    'reason' => fake()->randomElement(ChargeBackReason::cases())->value,
                ],
                'refunds' => null,
            ],
            ...$overrides,
        ];
    }
}
