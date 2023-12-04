<?php

declare(strict_types=1);

namespace Jetimob\Asaas\Entity\Account;

use Jetimob\Asaas\Traits\EnumHelpers;

enum DocumentStatusEnum: string
{
    use EnumHelpers;

    case NOT_SENT = 'NOT_SENT';
    case PENDING  = 'PENDING';
    case APPROVED = 'APPROVED';
    case REJECTED = 'REJECTED';

    public function toString(): string
    {
        return match ($this) {
            DocumentStatusEnum::NOT_SENT => 'Não enviado',
            DocumentStatusEnum::PENDING  => 'Aguardando aprovação',
            DocumentStatusEnum::APPROVED => 'Aprovado',
            DocumentStatusEnum::REJECTED => 'Rejeitado',
        };
    }
}
