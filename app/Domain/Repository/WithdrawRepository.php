<?php

namespace App\Domain\Repository;

use App\Domain\Repository\Contracts\WithdrawBaseRepositoryInterface;
use App\Models\Withdraw;

class WithdrawRepository implements WithdrawBaseRepositoryInterface
{

    public function getAll(): array
    {
        return Withdraw::all();
    }

    public function create(array $attributes): void
    {
        Withdraw::create($attributes);
    }
}
