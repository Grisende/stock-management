<?php

namespace App\Providers;

use App\Domain\Repository\Contracts\ProductRepositoryInterface;
use App\Domain\Repository\Contracts\WithdrawRepositoryInterface;
use App\Domain\Repository\ProductRepository;
use App\Domain\Repository\WithdrawRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ProductRepositoryInterface::class, ProductRepository::class);
        $this->app->bind(WithdrawRepositoryInterface::class, WithdrawRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
