<?php

namespace Jetimob\Asaas\Entity\Transfer;

enum OperationType: string
{
    case PIX = 'PIX';
    case TED = 'TED';
    case INTERNAL = 'INTERNAL';
}
