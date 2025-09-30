<?php

namespace App\Repositories;

use App\Contracts\VehicleModelRepositoryInterface;
use App\Models\VehicleModel;
use Illuminate\Database\Eloquent\Collection;

class VehicleModelRepository implements VehicleModelRepositoryInterface
{
    protected $model;

    public function __construct(VehicleModel $model)
    {
        $this->model = $model;
    }

    public function findById(int $id): ?VehicleModel
    {
        return $this->model->with(['brand', 'category', 'colors'])->find($id);
    }

    public function findByBrandId(int $brandId): Collection
    {
        return $this->model->with(['category', 'colors'])->where('brand_id', $brandId)->get();
    }

    public function findByCategoryId(int $categoryId): Collection
    {
        return $this->model->with(['brand', 'colors'])->where('category_id', $categoryId)->get();
    }

    public function getActive(): Collection
    {
        return $this->model->with(['brand', 'category', 'colors'])
            ->where('is_active', true)
            ->get();
    }

    public function getAll(): Collection
    {
        return $this->model->with(['brand', 'category', 'colors'])->get();
    }

    public function search(string $term): Collection
    {
        return $this->model->with(['brand', 'category'])
            ->where('name', 'LIKE', "%{$term}%")
            ->orWhereHas('brand', function ($q) use ($term) {
                $q->where('name', 'LIKE', "%{$term}%");
            })
            ->orWhereHas('category', function ($q) use ($term) {
                $q->where('name', 'LIKE', "%{$term}%");
            })
            ->where('is_active', true)
            ->get();
    }

    public function getByPriceRange(float $minPrice, float $maxPrice): Collection
    {
        return $this->model->with(['brand', 'category'])
            ->whereBetween('price_per_day', [$minPrice, $maxPrice])
            ->where('is_active', true)
            ->get();
    }

    public function create(array $data): VehicleModel
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
        $model = $this->model->find($id);
        if ($model) {
            return $model->update(['is_active' => !$model->is_active]);
        }
        return false;
    }
}
