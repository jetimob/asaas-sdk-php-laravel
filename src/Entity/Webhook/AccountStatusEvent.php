<?php

namespace Jetimob\Asaas\Entity\Webhook;

use Jetimob\Asaas\Traits\EnumHelpers;

enum AccountStatusEvent: string
{
    use EnumHelpers;

    /** Conta bancária aprovada */
    case ACCOUNT_STATUS_BANK_ACCOUNT_INFO_APPROVED = 'ACCOUNT_STATUS_BANK_ACCOUNT_INFO_APPROVED';
    /** Conta bancária está em análise */
    case ACCOUNT_STATUS_BANK_ACCOUNT_INFO_AWAITING_APPROVAL = 'ACCOUNT_STATUS_BANK_ACCOUNT_INFO_AWAITING_APPROVAL';
    /** Conta bancária voltou para pendente */
    case ACCOUNT_STATUS_BANK_ACCOUNT_INFO_PENDING = 'ACCOUNT_STATUS_BANK_ACCOUNT_INFO_PENDING';
    /** Conta bancária reprovada */
    case ACCOUNT_STATUS_BANK_ACCOUNT_INFO_REJECTED = 'ACCOUNT_STATUS_BANK_ACCOUNT_INFO_REJECTED';
    /** Informações comerciais aprovada */
    case ACCOUNT_STATUS_COMMERCIAL_INFO_APPROVED = 'ACCOUNT_STATUS_COMMERCIAL_INFO_APPROVED';
    /** Informações comerciais em análise */
    case ACCOUNT_STATUS_COMMERCIAL_INFO_AWAITING_APPROVAL = 'ACCOUNT_STATUS_COMMERCIAL_INFO_AWAITING_APPROVAL';
    /** Informações comerciais voltou para pendente */
    case ACCOUNT_STATUS_COMMERCIAL_INFO_PENDING = 'ACCOUNT_STATUS_COMMERCIAL_INFO_PENDING';
    /** Informações comerciais reprovada */
    case ACCOUNT_STATUS_COMMERCIAL_INFO_REJECTED = 'ACCOUNT_STATUS_COMMERCIAL_INFO_REJECTED';
    /** Documentos aprovados */
    case ACCOUNT_STATUS_DOCUMENT_APPROVED = 'ACCOUNT_STATUS_DOCUMENT_APPROVED';
    /** Documentos em análise */
    case ACCOUNT_STATUS_DOCUMENT_AWAITING_APPROVAL = 'ACCOUNT_STATUS_DOCUMENT_AWAITING_APPROVAL';
    /** Documentos voltaram para pendente */
    case ACCOUNT_STATUS_DOCUMENT_PENDING = 'ACCOUNT_STATUS_DOCUMENT_PENDING';
    /** Documentos reprovados */
    case ACCOUNT_STATUS_DOCUMENT_REJECTED = 'ACCOUNT_STATUS_DOCUMENT_REJECTED';
    /** Conta aprovada */
    case ACCOUNT_STATUS_GENERAL_APPROVAL_APPROVED = 'ACCOUNT_STATUS_GENERAL_APPROVAL_APPROVED';
    /** Conta em análise */
    case ACCOUNT_STATUS_GENERAL_APPROVAL_AWAITING_APPROVAL = 'ACCOUNT_STATUS_GENERAL_APPROVAL_AWAITING_APPROVAL';
    /** Conta voltou para pendente */
    case ACCOUNT_STATUS_GENERAL_APPROVAL_PENDING = 'ACCOUNT_STATUS_GENERAL_APPROVAL_PENDING';
    /** Conta reprovada */
    case ACCOUNT_STATUS_GENERAL_APPROVAL_REJECTED = 'ACCOUNT_STATUS_GENERAL_APPROVAL_REJECTED';
}
