<?php

namespace Jetimob\Asaas\Tests\Mocks;

use Illuminate\Contracts\Support\Arrayable;

abstract class AbstractMockResponse
{
    abstract public static function get(array $overrides = []): array;
}
