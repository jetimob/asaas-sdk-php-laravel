<?php

namespace Jetimob\Asaas\Tests;

use Jetimob\Asaas\Api\Account\CreateAccountResponse;
use Jetimob\Asaas\Api\Charging\CreateChargingResponse;
use Jetimob\Asaas\Api\Customer\CreateCustomerResponse;
use Jetimob\Asaas\AsaasServiceProvider;
use Jetimob\Asaas\Entity\Account\Account;
use Jetimob\Asaas\Entity\Charging\BillingType;
use Jetimob\Asaas\Entity\Charging\Callback;
use Jetimob\Asaas\Entity\Charging\Charging;
use Jetimob\Asaas\Entity\Charging\CreditCard;
use Jetimob\Asaas\Entity\Charging\CreditCardHolderInfo;
use Jetimob\Asaas\Entity\Charging\Discount;
use Jetimob\Asaas\Entity\Charging\DiscountType;
use Jetimob\Asaas\Entity\Charging\Fine;
use Jetimob\Asaas\Entity\Charging\Interest;
use Jetimob\Asaas\Entity\Customer\Customer;
use Jetimob\Asaas\Facades\Asaas;
use Jetimob\Asaas\Fakes\Utils;
use Orchestra\Testbench\TestCase;

class AbstractTestCase extends TestCase
{
    protected const DEFAULT_CUSTOMER_ID = 'cus_000005402499';
    protected const POSTAL_CODE = '93218-170';
    public const INVALID_CREDIT_CARD_NUMBER = '5184019740373151';
    public const VALID_CREDIT_CARD_NUMBER = '5573976081098318';

    /** @inheritDoc */
    public function getPackageProviders($app): array
    {
        return [AsaasServiceProvider::class];
    }

    protected function createCustomer(Customer $customer = null): CreateCustomerResponse
    {
        return Asaas::customer()->create($customer ?: $this->fakeCustomer());
    }

    protected function createAccount(Account $account = null): CreateAccountResponse
    {
        return Asaas::account()->create($account ?: $this->fakeAccount());
    }

    protected function createCharging(Charging $charging = null): CreateChargingResponse
    {
        return Asaas::charging()->create($charging ?: $this->fakeCharging());
    }

    protected function fakeCreditCard(bool $valid = true): CreditCard
    {
        /**
         *  A asaas disponibiliza um número de cartão de crédito inválido no sandbox
         *
         * {@see https://docs.asaas.com/reference/criar-nova-cobranca-com-cartao-de-credito}
         */
        $number = $valid
            ? self::VALID_CREDIT_CARD_NUMBER
            : self::INVALID_CREDIT_CARD_NUMBER;

        return with(new CreditCard())
            ->setHolderName(fake()->name)
            ->setNumber($number)
            ->setExpiryMonth('01')
            ->setExpiryYear('2025')
            ->setCcv('913');
    }

    protected function fakeCreditCardHolder(): CreditCardHolderInfo
    {
        return with(new CreditCardHolderInfo())
            ->setName(fake()->name)
            ->setEmail(fake()->safeEmail)
            ->setCpfCnpj(Utils::fakeCpf())
            ->setPostalCode(self::POSTAL_CODE)
            ->setPhone(fake()->phoneNumber)
            ->setAddressNumber(fake()->randomDigitNotNull())
            ->setAddressComplement(fake()->sentence)
            ->setMobilePhone(fake()->phoneNumber);
    }

    protected function fakeCustomer(): Customer
    {
        return with(new Customer())
            ->setName(fake()->name)
            ->setEmail(fake()->email)
            ->setCpfCnpj(Utils::fakeCpf());
    }

    protected function fakeAccount(): Account
    {
        return with(new Account())
            ->setName(fake()->name)
            ->setCpfCnpj(Utils::fakeCpf())
            ->setBirthDate(now()->subYears(40))
            ->setEmail(fake()->email)
            ->setPostalCode(self::POSTAL_CODE);
    }

    protected function fakeCharging(): Charging
    {
        return with(new Charging())
            ->setCustomer(self::DEFAULT_CUSTOMER_ID)
            ->setValue(fake()->randomFloat(0, 50, 100.0))
            ->setDueDate(now()->addMonth()->format('Y-m-d'))
            ->setBillingType(fake()->randomElement(BillingType::class)->value)
            ->setFine(Fine::withValue(fake()->randomFloat(0, 5.0, 10.0)))
            ->setInterest(Interest::withValue(fake()->randomFloat(0, 5.0, 10.0)))
            ->setDescription(fake()->text)
            ->setCallback(Callback::new('https://en.wikipedia.org/wiki/Type_theory', fake()->boolean))
            ->setDiscount(Discount::new(fake()->randomFloat(0, 5.0, 10.0), DiscountType::FIXED->value, fake()->numberBetween(1, 10)));
    }

    protected function fakeCreditCardCharging(): Charging
    {
        return $this->fakeCharging()
            ->setCreditCard($this->fakeCreditCard())
            ->setCreditCardHolderInfo($this->fakeCreditCardHolder())
            ->setDescription(fake()->text)
            ->setBillingType(BillingType::CREDIT_CARD->value)
            ->setRemoteIp(fake()->ipv4);
    }

    protected function assertNotThrowsException(\Closure $callback): void
    {
        try {
            $callback();
            $this->assertTrue(true);
        } catch (\Throwable $e) {
            $this->fail('Fail asserting that not thrown exception');
        }
    }
}
