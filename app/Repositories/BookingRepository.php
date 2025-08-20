<?php

namespace App\Repositories;

use App\Contracts\BookingRepositoryInterface;
use App\Models\Booking;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Carbon\Carbon;

class BookingRepository implements BookingRepositoryInterface
{
    protected $model;

    public function __construct(Booking $model)
    {
        $this->model = $model;
    }

    public function findById(int $id): ?Booking
    {
        return $this->model->with([
            'customer', 
            'vehicle.vehicleModel.brand', 
            'pickupOffice', 
            'returnOffice',
            'province',
            'bookingContract'
        ])->find($id);
    }

    public function findByCode(string $code): ?Booking
    {
        return $this->model->with([
            'customer', 
            'vehicle.vehicleModel.brand', 
            'pickupOffice', 
            'returnOffice'
        ])->where('code', $code)->first();
    }

    public function findByCustomerId(int $customerId): Collection
    {
        return $this->model->with(['vehicle.vehicleModel.brand', 'pickupOffice', 'returnOffice'])
            ->where('customer_id', $customerId)
            ->orderBy('created_at', 'desc')
            ->get();
    }

    public function findByVehicleId(int $vehicleId): Collection
    {
        return $this->model->with(['customer', 'pickupOffice', 'returnOffice'])
            ->where('vehicle_id', $vehicleId)
            ->orderBy('start_date', 'desc')
            ->get();
    }

    public function findByDateRange(string $startDate, string $endDate): Collection
    {
        return $this->model->with(['customer', 'vehicle.vehicleModel.brand'])
            ->whereBetween('start_date', [$startDate, $endDate])
            ->orderBy('start_date', 'desc')
            ->get();
    }

    public function findByStatus(string $status): Collection
    {
        return $this->model->with(['customer', 'vehicle.vehicleModel.brand'])
            ->where('status', $status)
            ->orderBy('created_at', 'desc')
            ->get();
    }

    public function getAll(): Collection
    {
        return $this->model->with(['customer', 'vehicle.vehicleModel.brand', 'pickupOffice'])
            ->orderBy('created_at', 'desc')
            ->get();
    }

    public function getPaginated(int $perPage = 15): LengthAwarePaginator
    {
        return $this->model->with(['customer', 'vehicle.vehicleModel.brand', 'pickupOffice'])
            ->orderBy('created_at', 'desc')
            ->paginate($perPage);
    }

    public function create(array $data): Booking
    {
        return $this->model->create($data);
    }

    public function update(int $id, array $data): bool
    {
        return $this->model->where('id', $id)->update($data);
    }

    public function updateStatus(int $id, string $status): bool
    {
        return $this->model->where('id', $id)->update(['status' => $status]);
    }

    public function delete(int $id): bool
    {
        return $this->model->destroy($id);
    }

    public function getTotalRevenue(?string $startDate = null, ?string $endDate = null): float
    {
        $query = $this->model->whereIn('status', ['confirmed', 'completed']);
        
        if ($startDate && $endDate) {
            $query->whereBetween('start_date', [$startDate, $endDate]);
        }
        
        return $query->sum('total_amount');
    }

    public function getBookingsByMonth(int $year): array
    {
        $bookings = $this->model->whereYear('start_date', $year)
            ->selectRaw('MONTH(start_date) as month, COUNT(*) as count, SUM(total_amount) as revenue')
            ->groupBy('month')
            ->orderBy('month')
            ->get()
            ->keyBy('month')
            ->toArray();

        $result = [];
        for ($i = 1; $i <= 12; $i++) {
            $result[$i] = [
                'month' => $i,
                'count' => $bookings[$i]['count'] ?? 0,
                'revenue' => $bookings[$i]['revenue'] ?? 0
            ];
        }

        return $result;
    }
}