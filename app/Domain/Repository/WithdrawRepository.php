<?php

namespace App\Domain\Repository;

use App\Domain\Repository\Contracts\WithdrawRepositoryInterface;
use App\Models\Withdraw;

class WithdrawRepository implements WithdrawRepositoryInterface
{

    public function getAll() : array
    {
        return Withdraw::all();
    }

    public function getById(int $id) : array
    {
        return Withdraw::findOrFail($id);
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
