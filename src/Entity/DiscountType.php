<?php

namespace Jetimob\Asaas\Entity;

enum DiscountType: string
{
    case FIXED = 'FIXED';
    case PERCENTAGE = 'PERCENTAGE';
}