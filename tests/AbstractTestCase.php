<?php

namespace Jetimob\Asaas\Tests;

use Jetimob\Asaas\Api\Customer\CreateCustomerResponse;
use Jetimob\Asaas\AsaasServiceProvider;
use Jetimob\Asaas\Entity\BillingType;
use Jetimob\Asaas\Entity\CreditCard;
use Jetimob\Asaas\Entity\CreditCardHolderInfo;
use Jetimob\Asaas\Entity\Customer;
use Jetimob\Asaas\Facades\Asaas;
use Orchestra\Testbench\TestCase;

class AbstractTestCase extends TestCase
{
    protected const DEFAULT_CUSTOMER_ID = 'cus_000005397996';
    protected const FAKE_CPF = '403.325.92014';
    protected const FAKE_POSTAL_CODE = '93218-170';

    /** @inheritDoc */
    public function getPackageProviders($app): array
    {
        return [AsaasServiceProvider::class];
    }

    protected function createCustomer(): CreateCustomerResponse
    {
        $api = Asaas::customer();
        $customer = (new Customer())
            ->setName(fake()->name)
            ->setEmail('oliveiragabriel.dev@gmail.com')
            ->setCpfCnpj(self::FAKE_CPF);

        return $api->create($customer);
    }

    protected function getRandomBillingType(): BillingType
    {
        return fake()->randomElement(BillingType::class);
    }

    protected function fakeCreditCard(bool $valid = true): CreditCard
    {
        /**
         *  A asaas disponibiliza um número de cartão de crédito inválido no sandbox
         *
         * {@see https://docs.asaas.com/reference/criar-nova-cobranca-com-cartao-de-credito}
        */
        $number = $valid
            ? '5369131498920872'
            : '5184019740373151';

        return (new CreditCard())
            ->setHolderName(fake()->name)
            ->setNumber($number)
            ->setExpiryMonth('05')
            ->setExpiryYear(now()->addYear()->year)
            ->setCcv('123');
    }

    protected function fakeCreditCardHolder(): CreditCardHolderInfo
    {
        return (new CreditCardHolderInfo())
            ->setName(fake()->name)
            ->setEmail(fake()->safeEmail)
            ->setCpfCnpj(self::FAKE_CPF)
            ->setPostalCode(self::FAKE_POSTAL_CODE)
            ->setPhone(fake()->phoneNumber)
            ->setAddressNumber(fake()->randomDigitNotNull())
            ->setAddressComplement(fake()->sentence)
            ->setMobilePhone(fake()->phoneNumber);
    }

    public static function generateRandomCpf(): string
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
}
