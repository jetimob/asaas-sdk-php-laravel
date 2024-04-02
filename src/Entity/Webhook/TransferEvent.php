<?php

namespace Jetimob\Asaas\Entity\Webhook;

enum TransferEvent: string
{
    /**  Geração de nova transferência. */
    case TRANSFER_CREATED = 'TRANSFER_CREATED';
    /** Transferência pendente de execução. */
    case TRANSFER_PENDING = 'TRANSFER_PENDING';
    /** Transferência em processamento bancário. */
    case TRANSFER_IN_BANK_PROCESSING = 'TRANSFER_IN_BANK_PROCESSING';
    /** Transferência bloqueada. */
    case TRANSFER_BLOCKED = 'TRANSFER_BLOCKED';
    /** Transferência realizada. */
    case TRANSFER_DONE = 'TRANSFER_DONE';
    /** Transferência falhou. */
    case TRANSFER_FAILED = 'TRANSFER_FAILED';
    /**  Transferência cancelada. */
    case TRANSFER_CANCELLED = 'TRANSFER_CANCELLED';
}
