<?php

namespace App\Http\Controllers;

use App\Domain\Service\ProductService;
use App\Http\Requests\WithdrawRequest;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    private $service;

    public function __construct(ProductService $service)
    {
        $this->service = $service;
    }

    public function list()
    {
        $products = $this->service->getAll();
    }

    public function getById(int $id)
    {
        $product = $this->service->getById($id);
    }

    public function create(WithdrawRequest $request)
    {
        $this->service->create($request);
    }

    public function update(WithdrawRequest $request, int $id)
    {
        $this->update($request->all(), $id);
    }

    public function delete(int $id)
    {
        $this->service->delete($id);
    }
}
