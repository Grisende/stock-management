<?php

namespace App\Domain\Repository\Contracts;

interface StockRepositoryInterface
{
    public function stockReport() : array;
}
