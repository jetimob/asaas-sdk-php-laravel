<?php

namespace Jetimob\Asaas\Entity\Account;

enum DocumentTypeEnum: string
{
    case IDENTIFICATION = 'IDENTIFICATION';
    case SOCIAL_CONTRACT = 'SOCIAL_CONTRACT';
    case ENTREPRENEUR_REQUIREMENT = 'ENTREPRENEUR_REQUIREMENT';
    case CUSTOM = 'CUSTOM';
    case MINUTES_OF_ELECTION = 'MINUTES_OF_ELECTION';
}
