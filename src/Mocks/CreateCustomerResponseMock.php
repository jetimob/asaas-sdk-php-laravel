<?php

declare(strict_types=1);

namespace Jetimob\Asaas\Mocks;

use Jetimob\Asaas\Fakes\Utils;

class CreateCustomerResponseMock extends AbstractMockResponse
{
    public static function get(array $overrides = []): array
    {
        return [
            'object' => 'customer',
            'id' => fake()->uuid(),
            'dateCreated' => fake()->date('Y/m/d'),
            'name' => fake()->name(),
            'email' => fake()->email(),
            'phone' => fake()->e164PhoneNumber(),
            'mobilePhone' => fake()->e164PhoneNumber(),
            'address' => fake()->address(),
            'addressNumber' => fake()->shuffleString('1234'),
            'complement' => fake()->sentence(),
            'province' => fake()->word(),
            'postalCode' => fake()->postcode(),
            'cpfCnpj' => Utils::fakeCpf(),
            'personType' => 'FISICA',
            'deleted' => fake()->boolean(),
            'additionalEmails' => sprintf('%s,%s,%s,%s', fake()->email(), fake()->email(), fake()->email(), fake()->email()),
            'externalReference' => fake()->shuffleString('12987382'),
            'notificationDisabled' => fake()->boolean(),
            'city' => fake()->randomDigit(),
            'state' => fake()->randomLetter(),
            'country' => fake()->word(),
            'observations' => fake()->sentence(),
        ];
    }
}