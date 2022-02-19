<?php

namespace App\Domain\Repository;

use App\Domain\Repository\Contracts\ProductBaseRepositoryInterface;
use App\Models\Product;

class ProductRepository implements ProductBaseRepositoryInterface
{

    public function getAll() : array
    {
        return Product::all();
    }

    public function getById(int $id) : array
    {
        return Product::findOrFail($id);
    }

    public function create(array $attributes) : void
    {
        Product::create($attributes);
    }

    public function update(array $attributes, int $id) : void
    {
        Product::findOrFail($id)->update($attributes);
    }

    public function delete(int $id) : void
    {
        Product::destroy($id);
    }
}
