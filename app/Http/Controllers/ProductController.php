<?php

namespace App\Http\Controllers;

use App\Domain\Service\ProductService;
use App\Http\Requests\ProductRequest;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    private $service;

    public function __construct(ProductService $service)
    {
        $this->service = $service;
    }

    public function form()
    {
        return view('product.form');
    }

    public function list()
    {
        $products = $this->service->getAll();

        return view('product.list', compact('products'));
    }

    public function getById(int $id)
    {
        $product = $this->service->getById($id);

        return view('product.form', compact('product'));
    }

    public function create(ProductRequest $request)
    {
        $this->service->create($request->all());

        return $this->list();
    }

    public function update(ProductRequest $request, int $id)
    {
        $this->service->update($request->all(), $id);

        return $this->list();
    }

    public function delete(int $id)
    {
        $this->service->delete($id);
    }
}
