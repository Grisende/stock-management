<?php

namespace App\Domain\Repository\Contracts;

interface ProductRepositoryInterface extends BaseRepositoryInterface
{
    public function delete(int $id) : void;
}
