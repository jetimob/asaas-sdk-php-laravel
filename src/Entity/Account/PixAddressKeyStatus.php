<?php

declare(strict_types=1);

namespace Jetimob\Asaas\Entity\Account;

enum PixAddressKeyStatus: string
{
    case AWAITING_ACTIVATION = 'AWAITING_ACTIVATION';
    case ACTIVE = 'ACTIVE ';
    case AWAITING_DELETION = 'AWAITING_DELETION ';
    case AWAITING_ACCOUNT_DELETION = 'AWAITING_ACCOUNT_DELETION ';
    case DELETED = 'DELETED ';
    case ERROR = 'ERROR ';
}