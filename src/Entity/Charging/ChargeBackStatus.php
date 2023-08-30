<?php

namespace Jetimob\Asaas\Entity\Charging;

enum ChargeBackStatus: string
{
    case REQUESTED = 'REQUESTED';
    case IN_DISPUTE = 'IN_DISPUTE';
    case DISPUTE_LOST = 'DISPUTE_LOST';
    case REVERSED = 'REVERSED';
    case DONE = 'DONE';
}
