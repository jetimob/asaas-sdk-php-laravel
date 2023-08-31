<?php

namespace Jetimob\Asaas\Tests\Feature\Api;

use Jetimob\Asaas\Api\Account\AccountResponse;
use Jetimob\Asaas\Api\Charging\ChargingApi;
use Jetimob\Asaas\Api\Charging\ConfirmReceiptInCashResponse;
use Jetimob\Asaas\Api\Charging\CreateChargingResponse;
use Jetimob\Asaas\Api\Charging\DeleteChargingResponse;
use Jetimob\Asaas\Api\Charging\FindChargingResponse;
use Jetimob\Asaas\Api\Charging\RestoreChargingResponse;
use Jetimob\Asaas\Api\Charging\UndoReceiptInCashResponse;
use Jetimob\Asaas\Api\Charging\UpdateChargingResponse;
use Jetimob\Asaas\Entity\Charging\BillingType;
use Jetimob\Asaas\Entity\Charging\ConfirmReceiptInCash;
use Jetimob\Asaas\Entity\Charging\Interest;
use Jetimob\Asaas\Entity\Charging\Split;
use Jetimob\Asaas\Exceptions\AsaasRequestException;
use Jetimob\Asaas\Facades\Asaas;
use Jetimob\Asaas\Tests\AbstractTestCase;
use PHPUnit\Framework\Attributes\Depends;
use PHPUnit\Framework\Attributes\Test;

class ChargingApiTest extends AbstractTestCase
{
    protected ChargingApi $api;

    protected function setUp(): void
    {
        parent::setUp();
        $this->api = Asaas::charging();
    }

    #[Test]
    public function shouldCreateChargingSuccessfully(): CreateChargingResponse
    {
        $response = $this->createCharging();

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertInstanceOf(CreateChargingResponse::class, $response);

        return $response;
    }

    #[Test]
    public function shouldNotCreateChargingWithInterestGreatherThanLimitPerMonth(): void
    {
        $this->expectException(AsaasRequestException::class);

        $charging = $this->fakeCharging()
            ->setInterest(Interest::withValue(10.1));

        $response = $this->createCharging($charging);

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertInstanceOf(CreateChargingResponse::class, $response);
    }

    #[Test]
    public function shouldCreateChargingForCreditCardSuccessfully(): void
    {
        $response = $this->createCharging($this->fakeCreditCardCharging());

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertInstanceOf(CreateChargingResponse::class, $response);
    }

    #[Test]
    public function shouldNotCreateAnChargingWithSplitAmountGreatherOrEqualThanChargingFinalValue(): void
    {
        $this->expectException(AsaasRequestException::class);

        $account = $this->createAccount();

        $charging = $this->fakeCharging();

        $chargingFinalValue = $charging->getValue() - $charging->getDiscount()->getValue();

        $charging = $charging->setSplit([
            Split::new($account->getWalletId(), $chargingFinalValue * 100)
        ]);

        $this->createCharging($charging);
    }

    #[Test]
    public function shouldCreateChargingWithSplitsSuccessfully(): AccountResponse
    {
        $account = $this->createAccount();
        $charging = $this->fakeCharging();

        $chargingFinalValue = $charging->getValue() - $charging->getDiscount()->getValue();

        $charging = $charging->setSplit([Split::new($account->getWalletId(), $chargingFinalValue - 10)]);

        $response = $this->createCharging($charging);

        $this->assertEquals(200, $response->getStatusCode());

        return $account;
    }

    #[Test]
    public function shouldCreateChargingFailWithInvalidCreditCard(): void
    {
        $this->expectException(AsaasRequestException::class);

        $charging = $this->fakeCharging()
            ->setCreditCard($this->fakeCreditCard(valid: false))
            ->setCreditCardHolderInfo($this->fakeCreditCardHolder())
            ->setDescription(fake()->text)
            ->setBillingType(BillingType::CREDIT_CARD->value)
            ->setRemoteIp(fake()->ipv4);

        $response = $this->api->create($charging);

        $this->assertEquals(400, $response->getStatusCode());
    }

    #[Test, Depends('shouldCreateChargingSuccessfully')]
    public function shouldUpdateChargingSuccessfully(CreateChargingResponse $charging)
    {
        $updatedCharging = $this->fakeCharging();

        $response = $this->api->update($charging->getId(), $updatedCharging);

        $this->assertSame(200, $response->getStatusCode());
        $this->assertInstanceOf(UpdateChargingResponse::class, $response);
        $this->assertSame($response->getDueDate(), $updatedCharging->getDueDate());
    }

    #[Test, Depends('shouldCreateChargingSuccessfully')]
    public function shouldFindChargingSuccessfully(CreateChargingResponse $charging)
    {
        $response = $this->api->find($charging->getId());

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertInstanceOf(FindChargingResponse::class, $response);
        $this->assertEquals($charging->getId(), $response->getId());
    }

    #[Test, Depends('shouldCreateChargingSuccessfully')]
    public function shouldConfirmReceiptInCashSuccessfully(CreateChargingResponse $charging): CreateChargingResponse
    {
        $confirmation = with(new ConfirmReceiptInCash())
            ->setPaymentDate(now()->format('Y-m-d'))
            ->setValue(1000)
            ->setNotifyCustomer(true);

        $response = $this->api->confirmReceiptInCash($charging->getId(), $confirmation);

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertInstanceOf(ConfirmReceiptInCashResponse::class, $response);

        return $charging;
    }

    #[Test, Depends('shouldConfirmReceiptInCashSuccessfully')]
    public function shouldUndoReceiptInCashConfirmationSuccessfully(CreateChargingResponse $charging): void
    {
        $response = $this->api->undoReceiptInCash($charging->getId());

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertInstanceOf(UndoReceiptInCashResponse::class, $response);
    }

    #[Test, Depends('shouldCreateChargingSuccessfully')]
    public function shouldDeleteChargingSuccessfully(CreateChargingResponse $charging): DeleteChargingResponse
    {
        $response = $this->api->delete($charging->getId());

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertInstanceOf(DeleteChargingResponse::class, $response);
        $this->assertTrue($response->isDeleted());
        $this->assertEquals($charging->getId(), $response->getId());

        return $response;
    }

    #[Test, Depends('shouldDeleteChargingSuccessfully')]
    public function shouldRestoreCanceledChargingSuccessfully(DeleteChargingResponse $charging): void
    {
        $response = $this->api->restore($charging->getId());

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertInstanceOf(RestoreChargingResponse::class, $response);
    }

    #[Test]
    public function shouldNotRefundBilletCharging(): void
    {
        $this->expectException(AsaasRequestException::class);

        $charging = $this->fakeCharging();

        $charging->setBillingType(BillingType::BILLET->value);

        $charging = $this->createCharging($charging);

        $this->api->refund($charging->getId(), $charging->getValue(), fake()->sentence);
    }
}
