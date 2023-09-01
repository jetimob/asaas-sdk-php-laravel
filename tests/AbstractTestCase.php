<?php

namespace Jetimob\Asaas\Tests;

use Jetimob\Asaas\Api\Account\CreateAccountResponse;
use Jetimob\Asaas\Api\Charging\CreateChargingResponse;
use Jetimob\Asaas\Api\Customer\CreateCustomerResponse;
use Jetimob\Asaas\AsaasServiceProvider;
use Jetimob\Asaas\Entity\Account\Account;
use Jetimob\Asaas\Entity\Charging\BillingType;
use Jetimob\Asaas\Entity\Charging\Charging;
use Jetimob\Asaas\Entity\Charging\CreditCard;
use Jetimob\Asaas\Entity\Charging\CreditCardHolderInfo;
use Jetimob\Asaas\Entity\Charging\Discount;
use Jetimob\Asaas\Entity\Charging\DiscountType;
use Jetimob\Asaas\Entity\Charging\Fine;
use Jetimob\Asaas\Entity\Charging\Interest;
use Jetimob\Asaas\Entity\Customer\Customer;
use Jetimob\Asaas\Facades\Asaas;
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

    public static function fakeCpf(): string
    {
        $cpf = random_int(100000000, 999999999);

        $aux = [10,9,8,7,6,5,4,3,2];
        $total = 0;

        foreach (str_split($cpf) as $key => $char) {
            $total += $char * $aux[$key];
        }

        $firstVerification = 11 - ($total % 11);

        $cpf .= ($firstVerification >= 10) ? '0' : $firstVerification;

        //Segundo digito verificador
        $aux = [11,10,9,8,7,6,5,4,3,2];
        $total = 0;

        foreach (str_split($cpf) as $key => $char) {
            $total += $char * $aux[$key];
        }

        $secondVerification = 11 - ($total % 11);
        $cpf .= ($secondVerification >= 10) ? '0' : $secondVerification;

        return $cpf;
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
            ->setCpfCnpj(self::fakeCpf())
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
            ->setCpfCnpj(self::fakeCpf());
    }

    protected function fakeAccount(): Account
    {
        return with(new Account())
            ->setName(fake()->name)
            ->setCpfCnpj(self::fakeCpf())
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
