<?php

namespace App\Http\Controllers;

use App\Domain\Service\WithdrawService;
use App\Http\Requests\WithdrawRequest;

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

        return $products;
    }

    public function getById(int $id)
    {
        $product = $this->service->getById($id);

        return $product;
    }

    public function create(WithdrawRequest $request)
    {
        $this->service->create($request->all());
    }

    public function update(WithdrawRequest $request, int $id)
    {
        $this->update($request, $id);
    }
}
