<?php

namespace App\Http\Controllers;

use App\Domain\Service\ProductService;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{

    private $service;

    public function __construct(ProductService $service)
    {
        $this->service = $service;
    }

    public function list()
    {
        return $this->service->getAll();
    }

    public function getById(int $id)
    {
        return $this->service->getById($id);
    }

    public function create(ProductRequest $request)
    {
        $this->service->create($request->all());
    }

    public function update(ProductRequest $request, int $id)
    {
        $this->update($request, $id);
    }

    public function delete(int $id)
    {
        $this->service->delete($id);
    }
}
