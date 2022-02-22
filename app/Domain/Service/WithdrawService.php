<?php

namespace App\Domain\Service;

use App\Domain\Repository\Contracts\WithdrawRepositoryInterface;

class WithdrawService
{

    private $repository;

    public function __construct(WithdrawRepositoryInterface $repository)
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
}
