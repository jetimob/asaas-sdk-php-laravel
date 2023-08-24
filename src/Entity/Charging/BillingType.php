<?php

namespace Jetimob\Asaas\Entity\Charging;

enum BillingType: string
{
    case UNDEFINED = 'UNDEFINED';
    case BILLET = 'BOLETO';
    case CREDIT_CARD = 'CREDIT_CARD';
    case PIX = 'PIX';
}
