<?php

namespace Jetimob\Asaas\Api\Account;

use Jetimob\Asaas\Entity\Account\WalletId;
use Jetimob\Http\Response;

class FindWalletsResponse extends Response
{
    public ?bool $hasMore;

    public ?int $totalCount;

    public ?int $limit;

    public ?int $offset;

    /**
     * @var $data WalletId[]
    */
    public array $data;

    public function dataItemType(): string
    {
        return WalletId::class;
    }

    public function getHasMore(): ?bool
    {
        return $this->hasMore;
    }

    public function getTotalCount(): ?int
    {
        return $this->totalCount;
    }

    public function getLimit(): ?int
    {
        return $this->limit;
    }

    public function getOffset(): ?int
    {
        return $this->offset;
    }

    public function getData(): array
    {
        return $this->data;
    }
}
