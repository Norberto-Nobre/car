<?php

namespace App\Contracts;

use App\Models\Booking;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

interface BookingRepositoryInterface
{
    public function findById(int $id): ?Booking;
    public function findByCode(string $code): ?Booking;
    public function findByCustomerId(int $customerId): Collection;
    public function findByVehicleId(int $vehicleId): Collection;
    public function findByDateRange(string $startDate, string $endDate): Collection;
    public function findByStatus(string $status): Collection;
    public function getAll(): Collection;
    public function getPaginated(int $perPage = 15): LengthAwarePaginator;
    public function create(array $data): Booking;
    public function update(int $id, array $data): bool;
    public function updateStatus(int $id, string $status): bool;
    public function delete(int $id): bool;
    public function getTotalRevenue(?string $startDate = null, ?string $endDate = null): float;
    public function getBookingsByMonth(int $year): array;
}