<?php

namespace App\Contracts;

use App\Models\Office;
use Illuminate\Database\Eloquent\Collection;

interface OfficeRepositoryInterface
{
    public function findById(int $id): ?Office;
    public function findByName(string $name): ?Office;
    public function findByCity(string $city): Collection;
    public function getActive(): Collection;
    public function getAll(): Collection;
    public function create(array $data): Office;
    public function update(int $id, array $data): bool;
    public function delete(int $id): bool;
    public function toggleStatus(int $id): bool;
}