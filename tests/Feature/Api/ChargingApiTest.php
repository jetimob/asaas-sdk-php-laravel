<?php

namespace Jetimob\Asaas\Tests\Feature\Api;

 use Jetimob\Asaas\Api\Account\AccountResponse;
use Jetimob\Asaas\Api\Charging\ChargingApi;
use Jetimob\Asaas\Api\Charging\ConfirmReceiptInCashResponse;
use Jetimob\Asaas\Api\Charging\CreateChargingResponse;
use Jetimob\Asaas\Api\Charging\DeleteChargingResponse;
use Jetimob\Asaas\Api\Charging\FindChargingResponse;
use Jetimob\Asaas\Api\Customer\CreateCustomerResponse;
use Jetimob\Asaas\Entity\Account;
use Jetimob\Asaas\Entity\BillingType;
use Jetimob\Asaas\Entity\Charging;
use Jetimob\Asaas\Entity\ConfirmReceiptInCash;
use Jetimob\Asaas\Entity\Discount;
use Jetimob\Asaas\Entity\DiscountType;
use Jetimob\Asaas\Entity\Fine;
use Jetimob\Asaas\Entity\Interest;
use Jetimob\Asaas\Entity\Split;
use Jetimob\Asaas\Exceptions\AsaasRequestException;
use Jetimob\Asaas\Facades\Asaas;
use Jetimob\Asaas\Tests\AbstractTestCase;

class ChargingApiTest extends AbstractTestCase
{
    protected ChargingApi $api;
    protected Charging $charging;
    protected CreateCustomerResponse $customer;

    protected function setUp(): void
    {
        parent::setUp();
        $this->api = Asaas::charging();
        $this->charging = (new Charging())
            ->setCustomer(self::DEFAULT_CUSTOMER_ID)
            ->setValue(fake()->randomFloat(0, 5.0, 50.0))
            ->setDueDate(now()->addMonth()->format('Y-m-d'))
            ->setBillingType($this->getRandomBillingType()->value)
            ->setFine(Fine::withValue(fake()->randomFloat(0, 5.0, 50.0)))
            ->setInterest(Interest::withValue(fake()->randomFloat(0, 5.0, 10.0)))
            ->setDescription(fake()->text)
            ->setDiscount(Discount::new(fake()->randomFloat(0, 5.0, 50.0), DiscountType::FIXED->value, fake()->numberBetween(1, 10)));
    }

    /** @test */
    public function shouldCreateChargingSuccessfully(): string
    {
        $response = $this->api->create($this->charging);

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertInstanceOf(CreateChargingResponse::class, $response);

        return $response->getId();
    }

    /** @test */
    public function shouldNotCreateChargingWithInterestGreatherThanLimitPerMonth(): void
    {
        $this->expectException(AsaasRequestException::class);

        $limitPerMonth = 10;

        $response = $this->api->create($this->charging->setInterest(Interest::withValue($limitPerMonth + 0.1)));

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertInstanceOf(CreateChargingResponse::class, $response);
    }

    /**
     * @test
     */
    public function shouldCreateChargingForCreditCardSuccessfully()
    {
        $this->charging
            ->setCreditCard($this->fakeCreditCard())
            ->setCreditCardHolderInfo($this->fakeCreditCardHolder())
            ->setDescription('cobrança por cartão de credito')
            ->setBillingType(BillingType::CREDIT_CARD->value)
            ->setRemoteIp(fake()->ipv4);

        $response = $this->api->create($this->charging);

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertInstanceOf(CreateChargingResponse::class, $response);
    }

    /**
     * @test
    */
    public function shouldCreateChargingFailWithInvalidCreditCard(): void
    {
        $this->expectException(AsaasRequestException::class);

        $this->charging
            ->setCreditCard($this->fakeCreditCard(valid: false))
            ->setCreditCardHolderInfo($this->fakeCreditCardHolder())
            ->setDescription('cobrança por cartão de credito')
            ->setBillingType(BillingType::CREDIT_CARD->value)
            ->setRemoteIp(fake()->ipv4);

        $response = $this->api->create($this->charging);

        $this->assertEquals(400, $response->getStatusCode());
    }

    /**
     * @depends shouldCreateChargingSuccessfully
     * @test
     */
    public function shouldFindChargingSuccessfully(string $id)
    {
        $response = $this->api->find($id);

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertInstanceOf(FindChargingResponse::class, $response);
        $this->assertEquals($id, $response->getId());
    }

    /**
     * @depends shouldCreateChargingSuccessfully
     *
     * @test
     */
    public function shouldConfirmReceiptInCashSuccessfully(string $id)
    {
        $confirmation = (new ConfirmReceiptInCash())
            ->setPaymentDate(now()->format('Y-m-d'))
            ->setValue(1000)
            ->setNotifyCustomer(true);

        $response = $this->api->confirmReceiptInCash($id, $confirmation);

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertInstanceOf(ConfirmReceiptInCashResponse::class, $response);
    }

    /**
     * @depends shouldCreateChargingSuccessfully
     * @test
    */
    public function shouldDeleteChargingSuccessfully(string $id)
    {
        $response = $this->api->delete($id);

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertInstanceOf(DeleteChargingResponse::class, $response);
        $this->assertTrue($response->isDeleted());
        $this->assertEquals($id, $response->getId());
    }

    /** @test */
    public function shouldNotCreateAnChargingWithSplitAmountGreatherOrEqualThanChargingFinalValue(): void
    {
        $this->expectException(AsaasRequestException::class);

        $account = $this->createAccount();

        $chargingFinalValue = $this->charging->getValue() - $this->charging->getDiscount()->getValue();

        $charging = $this->charging->setSplit([
            Split::new($account->getWalletId(), $chargingFinalValue)
        ]);

        $this->api->create($charging);
    }

    /**
     * @test
    */
    public function shouldCreateChargingWithSplitsSuccessfully(): AccountResponse
    {
        $account = $this->createAccount();

        $chargingFinalValue = $this->charging->getValue() - $this->charging->getDiscount()->getValue();

        $charging = $this->charging->setSplit([Split::new($account->getWalletId(), $chargingFinalValue - 10)]);

        $response = $this->api->create($charging);

        $this->assertEquals(200, $response->getStatusCode());

        return $account;
    }
}
