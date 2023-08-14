<?php

namespace Jetimob\Asaas\Entity;

enum ChargingStatus: string
{
    /* Aguardando pagamento */
    case PENDING = 'PENDING';
    /* Recebida (saldo já creditado na conta) */
    case RECEIVED = 'RECEIVED';
    /* Pagamento confirmado (saldo ainda não creditado) */
    case CONFIRMED = 'CONFIRMED';
    /* Vencida */
    case OVERDUE = 'OVERDUE';
    /* Estornada */
    case REFUNDED = 'REFUNDED';
    /* Recebida em dinheiro (não gera saldo na conta) */
    case RECEIVED_IN_CASH = 'RECEIVED_IN_CASH';
    /* Estorno Solicitado */
    case REFUND_REQUESTED = 'REFUND_REQUESTED';
    /* Estorno em processamento (liquidação já está agendada, cobrança será estornada após executar a liquidação) */
    case REFUND_IN_PROGRESS = 'REFUND_IN_PROGRESS';
    /* Recebido chargeback */
    case CHARGEBACK_REQUESTED = 'CHARGEBACK_REQUESTED';
    /* Em disputa de chargeback (caso sejam apresentados documentos para contestação) */
    case CHARGEBACK_DISPUTE = 'CHARGEBACK_DISPUTE';
    /* Disputa vencida, aguardando repasse da adquirente */
    case AWAITING_CHARGEBACK_REVERSAL = 'AWAITING_CHARGEBACK_REVERSAL';
    /* Em processo de negativação */
    case DUNNING_REQUESTED = 'DUNNING_REQUESTED';
    /* Recuperada */
    case DUNNING_RECEIVED = 'DUNNING_RECEIVED';
    /* Pagamento em análise */
    case AWAITING_RISK_ANALYSIS = 'AWAITING_RISK_ANALYSIS';
}