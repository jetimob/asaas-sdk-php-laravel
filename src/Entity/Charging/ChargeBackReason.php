<?php

namespace Jetimob\Asaas\Entity\Charging;

enum ChargeBackReason: string
{
    /* Ausência de impressão */
    case ABSENCE_OF_PRINT = 'ABSENCE_OF_PRINT';
    /* Fraude em ambiente de cartão não presente */
    case ABSENT_CARD_FRAUD = 'ABSENT_CARD_FRAUD';
    /* Transação telefônica ativada por cartão */
    case CARD_ACTIVATED_PHONE_TRANSACTION = 'CARD_ACTIVATED_PHONE_TRANSACTION';
    /* Fraude em ambiente de cartão presente */
    case CARD_FRAUD = 'CARD_FRAUD';
    /* Boletim de negativação de cartões */
    case CARD_RECOVERY_BULLETIN = 'CARD_RECOVERY_BULLETIN';
    /* Desacordo comercial */
    case COMMERCIAL_DISAGREEMENT = 'COMMERCIAL_DISAGREEMENT';
    /* Cópia não atendida */
    case COPY_NOT_RECEIVED = 'COPY_NOT_RECEIVED';
    /* Erro de apresentação de crédito / débito */
    case CREDIT_OR_DEBIT_PRESENTATION_ERROR = 'CREDIT_OR_DEBIT_PRESENTATION_ERROR';
    /* Pagamento por outros meios */
    case DIFFERENT_PAY_METHOD = 'DIFFERENT_PAY_METHOD';
    /* Sem autorização do portador do cartão */
    case FRAUD = 'FRAUD';
    /* Valor da transação é diferente */
    case INCORRECT_TRANSACTION_VALUE = 'INCORRECT_TRANSACTION_VALUE';
    /* Moeda inválida */
    case INVALID_CURRENCY = 'INVALID_CURRENCY';
    /* Dados inválidos */
    case INVALID_DATA = 'INVALID_DATA';
    /* Apresentação tardia */
    case LATE_PRESENTATION = 'LATE_PRESENTATION';
    /* Contestação regulatória / legal local */
    case LOCAL_REGULATORY_OR_LEGAL_DISPUTE = 'LOCAL_REGULATORY_OR_LEGAL_DISPUTE';
    /* ROCs múltiplos */
    case MULTIPLE_ROCS = 'MULTIPLE_ROCS';
    /* Transação de crédito original não aceita */
    case ORIGINAL_CREDIT_TRANSACTION_NOT_ACCEPTED = 'ORIGINAL_CREDIT_TRANSACTION_NOT_ACCEPTED';
    /* Outras fraudes - Cartão ausente */
    case OTHER_ABSENT_CARD_FRAUD = 'OTHER_ABSENT_CARD_FRAUD';
    /* Erro de processamento */
    case PROCESS_ERROR = 'PROCESS_ERROR';
    /* Cópia atendida ilegível / incompleta */
    case RECEIVED_COPY_ILLEGIBLE_OR_INCOMPLETE = 'RECEIVED_COPY_ILLEGIBLE_OR_INCOMPLETE';
    /* Recorrência cancelada */
    case RECURRENCE_CANCELED = 'RECURRENCE_CANCELED';
    /* Autorização requerida não obtida */
    case REQUIRED_AUTHORIZATION_NOT_GRANTED = 'REQUIRED_AUTHORIZATION_NOT_GRANTED';
    /* Direito de regresso integral por fraude */
    case RIGHT_OF_FULL_RECOURSE_FOR_FRAUD = 'RIGHT_OF_FULL_RECOURSE_FOR_FRAUD';
    /* Mercadoria / serviços cancelado */
    case SALE_CANCELED = 'SALE_CANCELED';
    /* Mercadoria / serviço com defeito ou em desacordo */
    case SERVICE_DISAGREEMENT_OR_DEFECTIVE_PRODUCT = 'SERVICE_DISAGREEMENT_OR_DEFECTIVE_PRODUCT';
    /* Mercadoria / serviços não recebidos */
    case SERVICE_NOT_RECEIVED = 'SERVICE_NOT_RECEIVED';
    /* Desmembramento de venda */
    case SPLIT_SALE = 'SPLIT_SALE';
    /* Transf. de responsabilidades diversas */
    case TRANSFERS_OF_DIVERSE_RESPONSIBILITIES = 'TRANSFERS_OF_DIVERSE_RESPONSIBILITIES';
    /* Débito de aluguel de carro não qualificado */
    case UNQUALIFIED_CAR_RENTAL_DEBIT = 'UNQUALIFIED_CAR_RENTAL_DEBIT';
    /* Contestação do portador de cartão (EUA) */
    case USA_CARDHOLDER_DISPUTE = 'USA_CARDHOLDER_DISPUTE';
    /* Programa Visa de monitoramento de fraude */
    case VISA_FRAUD_MONITORING_PROGRAM = 'VISA_FRAUD_MONITORING_PROGRAM';
    /* Arquivo boletim de advertência */
    case WARNING_BULLETIN_FILE = 'WARNING_BULLETIN_FILE';
}