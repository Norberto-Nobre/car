<?php

namespace App\Repositories;

use App\Contracts\OfficeRepositoryInterface;
use App\Models\Office;
use Illuminate\Database\Eloquent\Collection;

class OfficeRepository implements OfficeRepositoryInterface
{
    protected $model;

    public function __construct(Office $model)
    {
        $this->model = $model;
    }

    public function findById(int $id): ?Office
    {
        return $this->model->find($id);
    }

    public function findByName(string $name): ?Office
    {
        return $this->model->where('name', $name)->first();
    }

    public function findByCity(string $city): Collection
    {
        return $this->model->where('city', 'like', "%{$city}%")->get();
    }

    public function getActive(): Collection
    {
        return $this->model->where('is_active', true)->orderBy('name')->get();
    }

    public function getAll(): Collection
    {
        return $this->model->orderBy('name')->get();
    }

    public function create(array $data): Office
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
        $office = $this->model->find($id);
        if ($office) {
            return $office->update(['is_active' => !$office->is_active]);
        }
        return false;
    }
}