<?php

namespace App\Domain\Service;

use App\Domain\Repository\StockRepository;

class StockService
{
    private $repository;

    public function __construct(StockRepository $repository)
    {
        $this->repository = $repository;
    }

    public function stockReport() : array
    {
        return $this->repository->stockReport();
    }
}
