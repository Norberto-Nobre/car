<?php

namespace App\Repositories;

use App\Contracts\VehicleRepositoryInterface;
use App\Models\Vehicle;
use App\Models\Booking;
use Illuminate\Database\Eloquent\Collection;

class VehicleRepository implements VehicleRepositoryInterface
{
    protected $model;

    public function __construct(Vehicle $model)
    {
        $this->model = $model;
    }

    public function findById(int $id): ?Vehicle
    {
        return $this->model->with(['vehicleModel.brand', 'vehicleModel.category'])->find($id);
    }

    public function findBySlug(string $slug): ?Vehicle
    {
        return $this->model->with(['vehicleModel.brand', 'vehicleModel.category'])->where('slug', $slug)->first();
    }

    public function findByLicensePlate(string $licensePlate): ?Vehicle
    {
        return $this->model->where('license_plate', $licensePlate)->first();
    }

    public function findByModelId(int $modelId): Collection
    {
        return $this->model->where('vehicle_model_id', $modelId)->get();
    }

    public function getAvailableVehicles(string $startDate, string $endDate, ?int $categoryId = null): Collection
    {
        $query = $this->model->with(['vehicleModel.brand', 'vehicleModel.category'])
            ->whereDoesntHave('bookings', function ($q) use ($startDate, $endDate) {
                $q->where(function ($query) use ($startDate, $endDate) {
                    $query->whereBetween('start_date', [$startDate, $endDate])
                          ->orWhereBetween('end_date', [$startDate, $endDate])
                          ->orWhere(function ($q) use ($startDate, $endDate) {
                              $q->where('start_date', '<=', $startDate)
                                ->where('end_date', '>=', $endDate);
                          });
                })->whereIn('status', ['confirmed', 'active']);
            });

        if ($categoryId) {
            $query->whereHas('vehicleModel', function ($q) use ($categoryId) {
                $q->where('category_id', $categoryId);
            });
        }

        return $query->get();
    }

    public function getAll(): Collection
    {
        return $this->model->with(['vehicleModel.brand', 'vehicleModel.category'])->get();
    }

    public function create(array $data): Vehicle
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

    public function isVehicleAvailable(int $vehicleId, string $startDate, string $endDate): bool
    {
        return !$this->model->where('id', $vehicleId)
            ->whereHas('bookings', function ($q) use ($startDate, $endDate) {
                $q->where(function ($query) use ($startDate, $endDate) {
                    $query->whereBetween('start_date', [$startDate, $endDate])
                          ->orWhereBetween('end_date', [$startDate, $endDate])
                          ->orWhere(function ($q) use ($startDate, $endDate) {
                              $q->where('start_date', '<=', $startDate)
                                ->where('end_date', '>=', $endDate);
                          });
                })->whereIn('status', ['confirmed', 'active']);
            })->exists();
    }
}