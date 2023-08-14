<?php

namespace Jetimob\Asaas\Entity;

use Jetimob\Http\Traits\Serializable;

abstract class Entity implements \JsonSerializable
{
    use Serializable;
}
