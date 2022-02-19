<?php

namespace App\Domain\Service;

use App\Domain\Repository\Contracts\ProductBaseRepositoryInterface;

class ProductService
{
    private $repository;

    public function __construct(ProductBaseRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function getAll() : array
    {
        return $this->repository->getAll();
    }

    public function create(array $attributes)
    {
        $this->repository->create($attributes);
    }
}
