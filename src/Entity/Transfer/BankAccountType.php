<?php

namespace Jetimob\Asaas\Entity\Transfer;

use Jetimob\Asaas\Traits\EnumHelpers;

enum BankAccountType: string
{
    use EnumHelpers;

    /** Conta corrente */
    case CHECKING_ACCOUNT = 'CONTA_CORRENTE';
    /** Conta Poupança */
    case SAVINGS_ACCOUNT = 'CONTA_POUPANCA';
}
