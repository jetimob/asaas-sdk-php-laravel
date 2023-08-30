<?php

namespace Jetimob\Asaas\Entity\Transfer;

enum TransferStatus: string
{
    case REFUSED = 'REFUSED';
    case APPROVED  = 'APPROVED';
}
