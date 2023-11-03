<?php

namespace Jetimob\Asaas\Entity\Account;

use Jetimob\Asaas\Traits\EnumHelpers;

enum CompanyType: string
{
    use EnumHelpers;

    case MEI = 'MEI';
    case LIMITED = 'LIMITED';
    case INDIVIDUAL = 'INDIVIDUAL';
    case ASSOCIATION = 'ASSOCIATION';
}
