<?php

namespace Jetimob\Asaas\Api\Account;

use Jetimob\Http\Response;

class SplitStatisticsResponse extends Response
{
    /** @var $outcome int */
    protected int $outcome;

    /** @var $income int */
    protected int $income;

    public function getOutcome(): int
    {
        return $this->outcome;
    }

    public function getIncome(): int
    {
        return $this->outcome;
    }
}
