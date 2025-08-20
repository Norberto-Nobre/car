<?php

namespace App\Repositories;

use App\Contracts\BrandRepositoryInterface;
use App\Models\Brand;
use Illuminate\Database\Eloquent\Collection;

class BrandRepository implements BrandRepositoryInterface
{
    protected $model;

    public function __construct(Brand $model)
    {
        $this->model = $model;
    }

    public function findById(int $id): ?Brand
    {
        return $this->model->find($id);
    }

    public function findByName(string $name): ?Brand
    {
        return $this->model->where('name', $name)->first();
    }

    public function getActive(): Collection
    {
        return $this->model->where('is_active', true)->orderBy('name')->get();
    }

    public function getAll(): Collection
    {
        return $this->model->orderBy('name')->get();
    }

    public function create(array $data): Brand
    {
        return $this->model->create($data);
    }

    public function update(int $id, array $data): bool
    {
        return $this->model->where('id', $id)->update($data);
    }

    public function delete(int $id): bool
    {
        return $this->model->destroy($id);
    }

    public function toggleStatus(int $id): bool
    {
        $brand = $this->model->find($id);
        if ($brand) {
            return $brand->update(['is_active' => !$brand->is_active]);
        }
        return false;
    }

    public function getBrandsWithVehicleCount(): Collection
    {
        return $this->model->withCount('vehicleModels')->orderBy('name')->get();
    }
}