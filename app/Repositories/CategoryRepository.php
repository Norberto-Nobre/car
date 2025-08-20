<?php

namespace App\Repositories;

use App\Contracts\CategoryRepositoryInterface;
use App\Models\Category;
use Illuminate\Database\Eloquent\Collection;

class CategoryRepository implements CategoryRepositoryInterface
{
    protected $model;

    public function __construct(Category $model)
    {
        $this->model = $model;
    }

    public function findById(int $id): ?Category
    {
        return $this->model->find($id);
    }

    public function findByName(string $name): ?Category
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

    public function create(array $data): Category
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
        $category = $this->model->find($id);
        if ($category) {
            return $category->update(['is_active' => !$category->is_active]);
        }
        return false;
    }

    public function getCategoriesWithVehicleCount(): Collection
    {
        return $this->model->withCount('vehicleModels')->orderBy('name')->get();
    }
}