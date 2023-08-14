<?php

namespace Jetimob\Asaas\Entity;

enum RefundStatus: string
{
    case PENDING = 'PENDING';
    case CANCELLED = 'CANCELLED';
    case DONE = 'DONE';
}