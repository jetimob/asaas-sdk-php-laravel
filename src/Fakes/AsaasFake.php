<?php

declare(strict_types=1);

namespace Jetimob\Asaas\Fakes;

class AsaasFake
{
    protected array $instances;

    public function __construct()
    {
        $this->instances = [
            'customer' => resolve(CustomerApiFake::class),
            'account'  => resolve(AccountApiFake::class),
            'charging' => resolve(ChargingApiFake::class),
            'transfer' => resolve(TransferApiFake::class),
        ];
    }

    public function customer(): CustomerApiFake
    {
        return $this->instances['customer'];
    }

    public function account(): AccountApiFake
    {
        return $this->instances['account'];
    }

    public function charging(): ChargingApiFake
    {
        return $this->instances['charging'];
    }

    public function transfer(): TransferApiFake
    {
        return $this->instances['transfer'];
    }
}
