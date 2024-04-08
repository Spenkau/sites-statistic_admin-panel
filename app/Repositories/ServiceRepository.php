<?php

namespace App\Repositories;

use App\Http\Resources\ServiceResource;
use App\Models\Service;
use Ganimed\AnalystPackage\Repositories\BaseRepository;
use Ganimed\AnalystPackage\Resources\SiteResource;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Resources\Json\JsonResource;

class ServiceRepository extends BaseRepository
{
    public Model $model;

    public function __construct(Service $model)
    {
        $this->model = $model;
    }

    public function all(array $criteria): JsonResource
    {
        return ServiceResource::collection($this->allModels($criteria, 'serviceData'));
    }

    public function store(array $data): JsonResource
    {
        $newService = $this->storeModel($data);

        return new SiteResource($newService);
    }

    public function update(int $id, array $data): bool
    {
        return $this->updateModel($id, $data);
    }

    public function destroy(int $id): bool
    {
        return $this->destroyModel($id);
    }
}
