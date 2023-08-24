<?php

namespace Jetimob\Asaas\Entity\Transfer;

enum BankAccountType: string
{
    /** Conta corrente */
    case CHECKING_ACCOUNT = 'CONTA_CORRENTE';
    /** Conta Poupança */
    case SAVINGS_ACCOUNT = 'CONTA_POUPANCA';
}
