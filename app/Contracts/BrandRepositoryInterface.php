<?php

namespace App\Contracts;

use App\Models\Brand;
use Illuminate\Database\Eloquent\Collection;

interface BrandRepositoryInterface
{
    public function findById(int $id): ?Brand;
    public function findByName(string $name): ?Brand;
    public function getActive(): Collection;
    public function getAll(): Collection;
    public function create(array $data): Brand;
    public function update(int $id, array $data): bool;
    public function delete(int $id): bool;
    public function toggleStatus(int $id): bool;
    public function getBrandsWithVehicleCount(): Collection;
}