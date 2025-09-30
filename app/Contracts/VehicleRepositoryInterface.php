<?php
namespace App\Contracts;

use App\Models\Vehicle;
use Illuminate\Database\Eloquent\Collection;

interface VehicleRepositoryInterface
{
    public function findById(int $id): ?Vehicle;
    public function findBySlug(string $slug): ?Vehicle;
    public function findByLicensePlate(string $licensePlate): ?Vehicle;
    public function findByModelId(int $modelId): Collection;
    public function getAvailableVehicles(string $startDate, string $endDate, ?int $categoryId = null): Collection;
    public function search(string $term): Collection;
    public function getAll($limit): Collection;
    public function getPopularVehicles($limit);
    public function create(array $data): Vehicle;
    public function update(int $id, array $data): bool;
    public function delete(int $id): bool;
    public function isVehicleAvailable(int $vehicleId, string $startDate, string $endDate): bool;
}
