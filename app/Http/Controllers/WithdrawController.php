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
        $withdraws = $this->service->getAll();

        return view('withdraw.list', compact('withdraws'));
    }

    public function getById(int $id)
    {
        $withdraw = $this->service->getById($id);

        return view('withdraw.form', compact('withdraw'));
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
