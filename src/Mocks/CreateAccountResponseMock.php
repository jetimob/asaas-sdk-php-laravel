<?php

declare(strict_types=1);

namespace Jetimob\Asaas\Mocks;

use Jetimob\Asaas\Entity\Account\CompanyType;
use Jetimob\Asaas\Fakes\Utils;
use Jetimob\Asaas\Tests\AbstractTestCase;

class CreateAccountResponseMock extends AbstractMockResponse
{
    public static function get(array $overrides = []): array
    {
        return [
            'object' => 'account',
            'id' => fake()->uuid(),
            'name' => fake()->name(),
            'email' => fake()->email(),
            'loginEmail' => fake()->email(),
            'phone' => fake()->e164PhoneNumber(),
            'mobilePhone' => fake()->e164PhoneNumber(),
            'address' => fake()->streetAddress(),
            'addressNumber' => (string) fake()->randomDigit(),
            'complement' => fake()->sentence(),
            'province' => fake()->address(),
            'postalCode' => fake()->postcode(),
            'cpfCnpj' => Utils::fakeCpf(),
            'birthDate' => now()->subYears(20)->toDateString(),
            'personType' => 'JURIDICA',
            'companyType' => CompanyType::random()->value,
            'city' => fake()->numberBetween(100, 10000),
            'state' => fake()->word,
            'country' => fake()->country(),
            'site' => fake()->url(),
            'apiKey' => fake()->uuid(),
            'walletId' => fake()->uuid(),
            'accountNumber' => [
                'agency' => fake()->shuffleString('0001'),
                'account' => fake()->shuffleString('6451'),
                'accountDigit' => (string) fake()->randomDigit(),
            ],
            ...$overrides,
        ];
    }
}