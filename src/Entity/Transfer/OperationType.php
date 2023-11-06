<?php

namespace Jetimob\Asaas\Entity\Transfer;

use Jetimob\Asaas\Traits\EnumHelpers;

enum OperationType: string
{
    use EnumHelpers;

    case PIX = 'PIX';
    case TED = 'TED';
    case INTERNAL = 'INTERNAL';
}
