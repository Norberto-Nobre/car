<?php

namespace App\Providers;

use App\Contracts\BookingRepositoryInterface;
use App\Contracts\BrandRepositoryInterface;
use App\Contracts\CategoryRepositoryInterface;
use App\Contracts\CustomerRepositoryInterface;
use App\Contracts\OfficeRepositoryInterface;
use App\Contracts\VehicleModelRepositoryInterface;
use App\Contracts\VehicleRepositoryInterface;
use App\Repositories\BookingRepository;
use App\Repositories\BrandRepository;
use App\Repositories\CategoryRepository;
use App\Repositories\CustomerRepository;
use App\Repositories\OfficeRepository;
use App\Repositories\VehicleModelRepository;
use App\Repositories\VehicleRepository;
use Illuminate\Support\ServiceProvider;
use App\Services\ContractService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
    $this->app->bind(BookingRepositoryInterface::class, BookingRepository::class);
    $this->app->bind(BrandRepositoryInterface::class, BrandRepository::class);
    $this->app->bind(CategoryRepositoryInterface::class, CategoryRepository::class);
    $this->app->bind(CustomerRepositoryInterface::class, CustomerRepository::class);
    $this->app->bind(OfficeRepositoryInterface::class, OfficeRepository::class);
    $this->app->bind(VehicleModelRepositoryInterface::class, VehicleModelRepository::class);
    $this->app->bind(VehicleRepositoryInterface::class, VehicleRepository::class); // corrigido
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
