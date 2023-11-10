<?php

namespace Jetimob\Asaas\Mocks;

use Jetimob\Asaas\Entity\Webhook\AccountStatusEvent;

class AccountStatusWebhookEventMock extends AbstractMockResponse
{
    public static function get(array $overrides = []): array
    {
        return [
            'event' => AccountStatusEvent::random()->value,
            'accountStatus' => [
                'id' => fake()->uuid(),
                'commercialInfo' => 'APPROVED',
                'bankAccountInfo' => 'APPROVED',
                'documentation' => 'APPROVED',
                'general' => 'APPROVED',
            ],
            ...$overrides,
        ];
    }
}