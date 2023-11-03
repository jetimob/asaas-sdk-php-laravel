<?php

namespace Jetimob\Asaas\Tests\Unit;

use Jetimob\Asaas\Entity\Webhook\TransferWebhookEvent;
use Jetimob\Asaas\Tests\AbstractTestCase;
use Jetimob\Asaas\Mocks\TransferWebhookEventMock;
use PHPUnit\Framework\Attributes\Test;

class TransferWebhookEventTest extends AbstractTestCase
{
    #[Test]
    public function shouldDeserializeTransferWebhookEventDataSuccessfully(): void
    {
        $this->assertNotThrowsException(function () {
            $transferEvent = TransferWebhookEventMock::get();

            TransferWebhookEvent::deserialize($transferEvent);
        });
    }
}
