<?php

namespace Jetimob\Asaas\Tests\Unit;

use Jetimob\Asaas\Api\Charging\CreateChargingResponse;
use Jetimob\Asaas\Mocks\AccountStatusWebhookEventMock;
use Jetimob\Asaas\Tests\AbstractTestCase;
use PHPUnit\Framework\Attributes\Test;

class AccountStatusWebhookTest extends AbstractTestCase
{
    #[Test]
    public function shouldDeserializeAccountStatusRequestSuccessfully()
    {
        $this->assertNotThrowsException(function () {
            $request = AccountStatusWebhookEventMock::get();

            CreateChargingResponse::deserialize($request);
        });
    }
}