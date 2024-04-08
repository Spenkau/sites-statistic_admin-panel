<?php

namespace App\Services;

use App\Repositories\ServiceRepository;
use Illuminate\Http\Resources\Json\JsonResource;

class ServiceService
{
    public function __construct(public ServiceRepository $serviceRepository) {}

    public function all(array $criteria): JsonResource
    {
         return $this->serviceRepository->all($criteria);
    }

    public function store(array $data): JsonResource
    {
        return $this->serviceRepository->store($data);
    }

    public function update(int $id, array $data): bool
    {
        return $this->serviceRepository->update($id, $data);
    }

    public function destroy(int $id): bool
    {
        return $this->serviceRepository->destroy($id);
    }
}
