<?php

namespace Jetimob\Asaas\Tests\Unit;

use Jetimob\Asaas\Api\Charging\CreateChargingResponse;
use Jetimob\Asaas\Tests\AbstractTestCase;
use Jetimob\Asaas\Mocks\CreateChargingResponseMock;
use PHPUnit\Framework\Attributes\Test;

class CreateChargingTest extends AbstractTestCase
{
    #[Test]
    public function shouldDeserializeCreateChargingResponseSuccessfully(): void
    {
        $this->assertNotThrowsException(function () {
            $response = CreateChargingResponseMock::get();

            $charging = CreateChargingResponse::deserialize($response);
        });
    }
}
