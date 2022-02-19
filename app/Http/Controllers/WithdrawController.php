<?php

namespace App\Http\Controllers;

use App\Domain\Service\WithdrawService;
use App\Http\Requests\ProductRequest;

class WithdrawController extends Controller
{

    private $service;

    public function __construct(WithdrawService $service)
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

    public function create(ProductRequest $request)
    {
        $this->service->create($request->all());
    }

    public function update(ProductRequest $request, int $id)
    {
        $this->update($request, $id);
    }
}
