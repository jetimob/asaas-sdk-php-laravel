<?php

namespace Jetimob\Asaas\Entity\Account;

enum CompanyType: string
{
    case MEI = 'MEI';
    case LIMITED = 'LIMITED';
    case INDIVIDUAL = 'INDIVIDUAL';
    case ASSOCIATION = 'ASSOCIATION';
}
