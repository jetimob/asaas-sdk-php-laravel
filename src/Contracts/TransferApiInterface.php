<?php

declare(strict_types=1);

namespace Jetimob\Asaas\Contracts;

use Jetimob\Asaas\Api\Transfer\FindTransferResponse;
use Jetimob\Asaas\Api\Transfer\RequestTransferResponse;
use Jetimob\Asaas\Entity\Transfer\Transfer;

interface TransferApiInterface
{
    public function requestTransfer(Transfer $transfer): RequestTransferResponse;

    public function find(string $id): FindTransferResponse;
}
