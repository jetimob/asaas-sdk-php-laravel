<?php

namespace Jetimob\Asaas\Entity\Transfer;

use Jetimob\Asaas\Traits\EnumHelpers;

enum TransferStatus: string
{
    use EnumHelpers;

    case DONE = 'DONE';
    case PENDING = 'PENDING';
    case BANK_PROCESSING = 'BANK_PROCESSING';
    case CANCELLED = 'CANCELLED';
    case FAILED = 'FAILED';

    public function toString(): string
    {
        return match ($this) {
            self::DONE => 'Efetivada',
            self::PENDING => 'Agendada',
            self::BANK_PROCESSING => 'Em processamento bancário',
            self::CANCELLED => 'Cancelada',
            self::FAILED => 'Falha na transferência',
        };
    }
}
