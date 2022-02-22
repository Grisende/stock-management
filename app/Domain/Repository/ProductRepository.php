<?php

namespace App\Domain\Repository;

use App\Domain\Models\Product;
use App\Domain\Repository\Contracts\ProductRepositoryInterface;
use Illuminate\Support\Facades\DB;

class ProductRepository implements ProductRepositoryInterface
{

    public function getAll() : array
    {
        return Product::all()->toArray();
    }

    public function getById(int $id) : array
    {
        return Product::findOrFail($id)->toArray();
    }

    public function create(array $attributes) : void
    {
        DB::table('products')->insert($attributes);

        $id = $this->getBySku($attributes['sku']);

        $this->insertInStock($id, $attributes);
    }

    public function update(array $attributes, int $id) : void
    {
        Product::findOrFail($id)->update($attributes);
    }

    public function delete(int $id) : void
    {
        Product::destroy($id);
    }

    private function getBySku(string $sku) : array
    {
        return (array)DB::table('products')
            ->select('id')
            ->where('sku', '=', $sku)
            ->get()->first();
    }

    private function insertInStock(array $id, array $attributes)
    {
        $product = array_merge($id, $attributes);
        DB::table('stocks')
            ->insert([
                'product_id' => $product['id'],
                'quantity' => $product['quantity']
            ]);
    }
}
