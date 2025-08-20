<?php

namespace App\Repositories;

use App\Contracts\CustomerRepositoryInterface;
use App\Models\Customer;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class CustomerRepository implements CustomerRepositoryInterface
{
    protected $model;

    public function __construct(Customer $model)
    {
        $this->model = $model;
    }

    public function findById(int $id): ?Customer
    {
        return $this->model->find($id);
    }

    public function findByEmail(string $email): ?Customer
    {
        return $this->model->where('email', $email)->first();
    }

    public function findByPhone(string $phone): ?Customer
    {
        return $this->model->where('phone', $phone)->first();
    }

    public function getAll(): Collection
    {
        return $this->model->orderBy('name')->get();
    }

    public function getPaginated(int $perPage = 15): LengthAwarePaginator
    {
        return $this->model->orderBy('name')->paginate($perPage);
    }

    public function search(string $term): Collection
    {
        return $this->model->where(function ($query) use ($term) {
            $query->where('name', 'like', "%{$term}%")
                  ->orWhere('email', 'like', "%{$term}%")
                  ->orWhere('phone', 'like', "%{$term}%");
        })->get();
    }

    public function create(array $data): Customer
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

    public function verifyEmail(int $id): bool
    {
        return $this->model->where('id', $id)->update([
            'email_verified_at' => now()
        ]);
    }

    public function getCustomersWithBookings(): Collection
    {
        return $this->model->has('bookings')->withCount('bookings')->get();
    }
}