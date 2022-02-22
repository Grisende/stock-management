<?php

namespace App\Http\Controllers;

use App\Domain\Service\ProductService;
use App\Domain\Service\WithdrawService;
use App\Http\Requests\WithdrawRequest;

class WithdrawController extends Controller
{

    private $service;

    private $productService;

    public function __construct(WithdrawService $service, ProductService $productService)
    {
        $this->service        = $service;
        $this->productService = $productService;
    }

    public function form()
    {
        $products = $this->productService->getAll();
        return view('withdraw.form', compact('products'));
    }

    public function list()
    {
        $withdraws = $this->service->getAll();

        return view('withdraw.list', compact('withdraws'));
    }

    public function getById(int $id)
    {
        $products = $this->productService->getAll();
        $withdraw = $this->service->getById($id);

        return view('withdraw.form', compact('withdraw', 'products'));
    }

    public function create(WithdrawRequest $request, int $isApi)
    {
        $attributes = [
            'product_id'     => $request['product_id'],
            'quantity'       => $request['quantity'],
            'withdraw_date'  => $request['withdraw_date'],
            'is_api'         => $isApi
        ];

        $this->service->create($attributes);

        return $this->list();
    }

    public function update(WithdrawRequest $request, int $id)
    {
        $this->service->update($request->all(), $id);

        return $this->list();
    }
}
