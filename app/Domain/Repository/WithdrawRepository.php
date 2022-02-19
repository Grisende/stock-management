<?php

namespace App\Domain\Repository;

use App\Domain\Models\Withdraw;
use App\Domain\Repository\Contracts\WithdrawRepositoryInterface;

class WithdrawRepository implements WithdrawRepositoryInterface
{

    public function getAll() : array
    {
        return Withdraw::all()->toArray();
    }

    public function getById(int $id) : array
    {
        return Withdraw::findOrFail($id)->toArray();
    }

    public function create(array $attributes) : void
    {
        Withdraw::create($attributes);
    }

    public function update(array $attributes, int $id) : void
    {
        Withdraw::findOrFail($id)->update($attributes);
    }
}
