<?php

namespace App\Domain\Repository\Contracts;

interface BaseRepositoryInterface
{
    public function getAll() : array;
    public function getById(int $id) : array;
    public function create(array $attributes) : void;
    public function update(array $attributes, int $id) : void;
}
