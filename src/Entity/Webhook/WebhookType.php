<?php

declare(strict_types=1);

namespace Jetimob\Asaas\Entity\Webhook;

use Jetimob\Asaas\Traits\EnumHelpers;

enum WebhookType: string
{
    use EnumHelpers;

    case PAYMENT = 'PAYMENT';
    case INVOICE = 'INVOICE';
    case TRANSFER = 'TRANSFER';
    case BILL = 'BILL';
    case RECEIVABLE_ANTICIPATION = 'RECEIVABLE_ANTICIPATION';
    case MOBILE_PHONE_RECHARGE = 'MOBILE_PHONE_RECHARGE';
    case ACCOUNT_STATUS = 'ACCOUNT_STATUS';
}