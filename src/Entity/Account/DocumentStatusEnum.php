<?php

namespace Jetimob\Asaas\Entity\Account;

enum DocumentStatusEnum: string
{
    case NOT_SENT = 'NOT_SENT';
    case PENDING  = 'PENDING';
    case APPROVED = 'APPROVED';
    case REJECTED = 'REJECTED';
}
