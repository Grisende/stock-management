<?php

namespace App\Domain\Repository;

use App\Domain\Models\Withdraw;
use App\Domain\Repository\Contracts\WithdrawRepositoryInterface;
use Illuminate\Support\Facades\DB;

class WithdrawRepository implements WithdrawRepositoryInterface
{

    public function getAll() : array
    {
        $query = DB::table('withdraws')
            ->select('withdraws.id', 'product_id', 'products.name', 'withdraws.quantity', 'withdraw_date', 'withdraws.is_api', 'products.sku')
            ->join('products', 'products.id', '=', 'withdraws.product_id');

        return $query->get()->keyBy('id')->map(function ($row) {
            return $row->id = (array)$row;
        })->all();
    }

    public function getById(int $id) : array
    {
        return (array)DB::table('withdraws')
            ->select('withdraws.id','product_id', 'products.name', 'withdraws.quantity', 'withdraw_date')
            ->join('products', 'products.id', '=', 'withdraws.product_id')
            ->where('withdraws.id', '=', $id)
            ->get()->first();
    }

    /**
     * @throws \Exception
     */
    public function create(array $attributes) : void
    {
        $quantity = $this->validateQuantity($attributes);

        $stockAttributes = [
            'product_id' => $attributes['product_id'],
            'quantity'   => $quantity
        ];

        $this->updateInStock($stockAttributes);

        Withdraw::create($attributes);
    }

    public function update(array $attributes, int $id) : void
    {
        Withdraw::findOrFail($id)->update($attributes);
    }

    private function updateInStock(array $attributes)
    {
        DB::table('stocks')
            ->where('product_id', '=', $attributes['product_id'])
            ->update(['quantity' => $attributes['quantity']]);
    }

    private function getInStock(int $id) : array
    {
        return (array)DB::table('stocks')
            ->select('quantity')
            ->where('product_id', '=', $id)
            ->first();
    }

    private function validateQuantity(array $attributes) : int
    {
        $stockQuantity = $this->getInStock($attributes['product_id']);

        if (($stockQuantity['quantity'] - $attributes['quantity']) < 0)
        {
            throw new \Exception('Quantidade indisponível em estoque');
        }

        $quantity = $stockQuantity['quantity'] - $attributes['quantity'];

        return $quantity;
    }
}
