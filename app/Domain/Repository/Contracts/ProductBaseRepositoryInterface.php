<?php

namespace App\Domain\Repository\Contracts;

interface ProductBaseRepositoryInterface extends BaseRepositoryInterface
{
    public function delete(int $id) : void;
}
