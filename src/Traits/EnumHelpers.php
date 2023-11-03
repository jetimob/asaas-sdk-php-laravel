<?php

declare(strict_types=1);

namespace Jetimob\Asaas\Traits;

trait EnumHelpers
{
    public static function random(): self
    {
        return fake()->randomElement(self::cases());
    }
}
