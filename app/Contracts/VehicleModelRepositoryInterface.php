<?php

namespace App\Contracts;

use App\Models\VehicleModel;
use Illuminate\Database\Eloquent\Collection;

interface VehicleModelRepositoryInterface
{
    public function findById(int $id): ?VehicleModel;
    public function findByBrandId(int $brandId): Collection;
    public function findByCategoryId(int $categoryId): Collection;
    public function getActive(): Collection;
    public function getAll(): Collection;
    public function getByPriceRange(float $minPrice, float $maxPrice): Collection;
    public function create(array $data): VehicleModel;
    public function update(int $id, array $data): bool;
    public function delete(int $id): bool;
    public function toggleStatus(int $id): bool;
}