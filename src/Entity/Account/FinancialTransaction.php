<?php

namespace Jetimob\Asaas\Entity\Account;

use Jetimob\Asaas\Entity\Entity;

class FinancialTransaction extends Entity
{
    //Tipo de objeto
    protected ?string $object = null;

    //Identificador único da transação no Asaas
    protected ?string $id = null;

    //Valor da transação
    protected ?float $value = null;

    //Valor em conta no momento da transação
    protected ?float $balance = null;

    //Tipo de transação
    protected ?string $type = null;

    //Data da transação
    protected ?string $date = null;

    //Descrição da transação
    protected ?string $description = null;

    //Identificador da cobrança (Se houver)
    protected ?string $paymentId = null;

    //Identificador do split (Se houver)
    protected ?string $splitId = null;

    //Identificador da transferência (Se houver)
    protected ?string $transferId = null;

    //Identificador da antecipação (Se houver)
    protected ?string $anticipationId = null;

    //Identificador do pagamento de contas (Se houver)
    protected ?string $billId = null;

    //Identificador da nota fiscal (Se houver)
    protected ?string $invoiceId = null;

    //Identificador da negativação (Se houver)
    protected ?string $paymentDunningId = null;

    //Identificador da consulta Serasa (Se houver)
    protected ?string $creditBureauReportId = null;

    public  function getObject(): ?string
    {
        return $this->object;
    }

    public  function getId(): ?string
    {
        return $this->id;
    }

    public  function getValue(): ?float
    {
        return $this->value;
    }

    public  function getBalance(): ?float
    {
        return $this->balance;
    }

    public  function getType(): ?string
    {
        return $this->type;
    }

    public  function getDate(): ?string
    {
        return $this->date;
    }

    public  function getDescription(): ?string
    {
        return $this->description;
    }

    public  function getPaymentId(): ?string
    {
        return $this->paymentId;
    }

    public  function getSplitId(): ?string
    {
        return $this->splitId;
    }

    public  function getTransferId(): ?string
    {
        return $this->transferId;
    }

    public  function getAnticipationId(): ?string
    {
        return $this->anticipationId;
    }

    public  function getBillId(): ?string
    {
        return $this->billId;
    }

    public  function getInvoiceId(): ?string
    {
        return $this->invoiceId;
    }

    public  function getPaymentDunningId(): ?string
    {
        return $this->paymentDunningId;
    }

    public  function getCreditBureauReportId(): ?string
    {
        return $this->creditBureauReportId;
    }
}
