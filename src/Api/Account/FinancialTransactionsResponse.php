<?php

namespace Jetimob\Asaas\Api\Account;

use Jetimob\Asaas\Entity\Account\FinancialTransaction;
use Jetimob\Http\Response;

class FinancialTransactionsResponse extends Response
{
    protected ?string $object = null;

    protected ?bool $hasMore = null;

    protected ?int $totalCount = null;

    protected ?int $limit = null;

    protected ?int $offset = null;

    protected ?array $data = null;

    public function dataItemType(): string
    {
        return FinancialTransaction::class;
    }

    public  function getObject(): ?string
    {
        return $this->object;
    }

    public  function getHasMore(): ?bool
    {
        return $this->hasMore;
    }

    public  function getTotalCount(): ?int
    {
        return $this->totalCount;
    }

    public  function getLimit(): ?int
    {
        return $this->limit;
    }

    public  function getOffset(): ?int
    {
        return $this->offset;
    }

    public  function getData(): ?array
    {
        return $this->data;
    }
}
