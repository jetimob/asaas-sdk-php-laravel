<?php

namespace Jetimob\Asaas\Entity\Webhook;

enum ChargingEvent: string
{
    /* Geração de nova cobrança. */
    case PAYMENT_CREATED = 'PAYMENT_CREATED';
    /* Pagamento em cartão aguardando aprovação pela análise manual de risco. */
    case PAYMENT_AWAITING_RISK_ANALYSIS = 'PAYMENT_AWAITING_RISK_ANALYSIS';
    /* Pagamento em cartão aprovado pela análise manual de risco. */
    case PAYMENT_APPROVED_BY_RISK_ANALYSIS = 'PAYMENT_APPROVED_BY_RISK_ANALYSIS';
    /* Pagamento em cartão reprovado pela análise manual de risco. */
    case PAYMENT_REPROVED_BY_RISK_ANALYSIS = 'PAYMENT_REPROVED_BY_RISK_ANALYSIS';
    /* Alteração no vencimento ou valor de cobrança existente. */
    case PAYMENT_UPDATED = 'PAYMENT_UPDATED';
    /* Cobrança confirmada (pagamento efetuado, porém o saldo ainda não foi disponibilizado). */
    case PAYMENT_CONFIRMED = 'PAYMENT_CONFIRMED';
    /* Cobrança recebida. */
    case PAYMENT_RECEIVED = 'PAYMENT_RECEIVED';
    /* Cobrança antecipada. */
    case PAYMENT_ANTICIPATED = 'PAYMENT_ANTICIPATED';
    /* Cobrança vencida. */
    case PAYMENT_OVERDUE = 'PAYMENT_OVERDUE';
    /* Cobrança removida. */
    case PAYMENT_DELETED = 'PAYMENT_DELETED';
    /* Cobrança restaurada. */
    case PAYMENT_RESTORED = 'PAYMENT_RESTORED';
    /* Cobrança estornada. */
    case PAYMENT_REFUNDED = 'PAYMENT_REFUNDED';
    /* Estorno em processamento (liquidação já está agendada, cobrança será estornada após executar a liquidação). */
    case PAYMENT_REFUND_IN_PROGRESS = 'PAYMENT_REFUND_IN_PROGRESS';
    /* Recebimento em dinheiro desfeito. */
    case PAYMENT_RECEIVED_IN_CASH_UNDONE = 'PAYMENT_RECEIVED_IN_CASH_UNDONE';
    /* Recebido chargeback. */
    case PAYMENT_CHARGEBACK_REQUESTED = 'PAYMENT_CHARGEBACK_REQUESTED';
    /* Em disputa de chargeback (caso sejam apresentados documentos para contestação). */
    case PAYMENT_CHARGEBACK_DISPUTE = 'PAYMENT_CHARGEBACK_DISPUTE';
    /* Disputa vencida, aguardando repasse da adquirente. */
    case PAYMENT_AWAITING_CHARGEBACK_REVERSAL = 'PAYMENT_AWAITING_CHARGEBACK_REVERSAL';
    /* Recebimento de negativação. */
    case PAYMENT_DUNNING_RECEIVED = 'PAYMENT_DUNNING_RECEIVED';
    /* Requisição de negativação. */
    case PAYMENT_DUNNING_REQUESTED = 'PAYMENT_DUNNING_REQUESTED';
    /* Boleto da cobrança visualizado pelo cliente. */
    case PAYMENT_BANK_SLIP_VIEWED = 'PAYMENT_BANK_SLIP_VIEWED';
    /* Fatura da cobrança visualizada pelo cliente. */
    case PAYMENT_CHECKOUT_VIEWED = 'PAYMENT_CHECKOUT_VIEWED';
}
