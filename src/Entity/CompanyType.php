<?php

namespace Jetimob\Asaas\Entity;

enum CompanyType: string
{
    case MEI = 'MEI';
    case LIMITED = 'LIMITED';
    case INDIVIDUAL = 'INDIVIDUAL';
    case ASSOCIATION = 'ASSOCIATION';
}
