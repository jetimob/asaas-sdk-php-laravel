<?php

namespace Jetimob\Asaas\Entity\Transfer;

use Jetimob\Asaas\Traits\EnumHelpers;

enum TransferStatus: string
{
    use EnumHelpers;

    case REFUSED = 'REFUSED';
    case APPROVED  = 'APPROVED';
}
