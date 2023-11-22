<?php

namespace Jetimob\Asaas\Api\Account;

use Jetimob\Asaas\Entity\Account\DocumentStatus;
use Jetimob\Http\Response;

class FindPendingDocumentsResponse extends Response
 {
    protected ?string $rejectReasons = null;

    protected ?array $data = null;

    public function dataItemType(): string
    {
        return DocumentStatus::class;
    }

    /** @return DocumentStatus[]|null */
    public function getData(): ?array
    {
        return $this->data;
    }
}
