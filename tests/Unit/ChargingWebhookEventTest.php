<?php

namespace Jetimob\Asaas\Tests\Unit;

use Jetimob\Asaas\Entity\Transfer\ChargingWebhookEventMock;
use Jetimob\Asaas\Entity\Webhook\ChargingWebhookEvent;
use Jetimob\Asaas\Tests\AbstractTestCase;
use PHPUnit\Framework\Attributes\Test;

class ChargingWebhookEventTest extends AbstractTestCase
{
    #[Test]
    public function shouldDeserializeWebhookEventSuccessfully(): void
    {
        $this->assertNotThrowsException(function () {
            $event = ChargingWebhookEventMock::get();

            $deserializedEvent = ChargingWebhookEvent::deserialize($event);
        });
    }
}
