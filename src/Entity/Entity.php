<?php

namespace Jetimob\Asaas\Entity;

 use Illuminate\Support\Traits\Conditionable;
use Jetimob\Http\Traits\Serializable;

abstract class Entity implements \JsonSerializable
{
    use Serializable;
    use Conditionable;
}
