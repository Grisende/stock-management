<?php

namespace App\Domain\Repository;

use App\Domain\Repository\Contracts\StockRepositoryInterface;
use Illuminate\Support\Facades\DB;

class StockRepository implements StockRepositoryInterface
{
    public function stockReport() : array
    {
        $query = DB::table('stocks')
            ->select('stocks.id','products.name', 'products.sku', 'stocks.quantity')
            ->join('products', 'products.id', '=', 'stocks.product_id');

        return $query->get()->keyBy('id')->map(function ($row) {
            return $row->id = (array)$row;
        })->all();
    }
}
