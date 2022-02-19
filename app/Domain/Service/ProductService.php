<?php

namespace App\Domain\Service;

use App\Domain\Repository\Contracts\ProductRepositoryInterface;

class ProductService
{
    private $repository;

    public function __construct(ProductRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function getAll() : array
    {
        return $this->repository->getAll();
    }

    public function getById(int $id) : array
    {
        return $this->repository->getById($id);
    }

    public function create(array $attributes)
    {
        $this->repository->create($attributes);
    }

    public function update(array $attributes, int $id) : void
    {
        $this->repository->update($attributes, $id);
    }

    public function delete(int $id) : void
    {
        $this->repository->delete($id);
    }
}
