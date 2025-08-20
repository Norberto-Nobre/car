<?php

namespace App\Contracts;

use App\Models\Category;
use Illuminate\Database\Eloquent\Collection;

interface CategoryRepositoryInterface
{
    public function findById(int $id): ?Category;
    public function findByName(string $name): ?Category;
    public function getActive(): Collection;
    public function getAll(): Collection;
    public function create(array $data): Category;
    public function update(int $id, array $data): bool;
    public function delete(int $id): bool;
    public function toggleStatus(int $id): bool;
    public function getCategoriesWithVehicleCount(): Collection;
}