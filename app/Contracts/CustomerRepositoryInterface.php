<?php

namespace App\Contracts;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

interface CustomerRepositoryInterface
{
    public function findById(int $id): ?Customer;
    public function findByEmail(string $email): ?Customer;
    public function findByPhone(string $phone): ?Customer;
    public function getAll(): Collection;
    public function getPaginated(int $perPage = 15): LengthAwarePaginator;
    public function search(string $term): Collection;
    public function create(array $data): Customer;
    public function update(int $id, array $data): bool;
    public function delete(int $id): bool;
    public function verifyEmail(int $id): bool;
    public function getCustomersWithBookings(): Collection;
}