<?php

namespace Jetimob\Asaas\Entity\Charging;

enum RefundStatus: string
{
    case PENDING = 'PENDING';
    case CANCELLED = 'CANCELLED';
    case DONE = 'DONE';
}
