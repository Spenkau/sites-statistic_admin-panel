<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServiceData\StoreRequest;
use App\Http\Requests\ServiceData\UpdateRequest;
use App\Http\Resources\ServiceDataResource;
use App\Models\Service;
use App\Models\ServiceData;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Nette\Schema\ValidationException;

class ServiceDataController extends Controller
{
    public function store(Service $service, StoreRequest $request): JsonResource
    {
        $data = $request->validated();

        return new ServiceDataResource(ServiceData::create($data));
    }

    public function edit(ServiceData $serviceData)
    {
        return view('serviceData.edit', ['serviceData' => $serviceData]);
    }

    public function update(ServiceData $serviceData, Request $request)
    {
        $data = $request->all();
        $serviceData->update($data);

        return redirect()->route('service.index');
    }

    public function destroy(int $serviceDataId)
    {
        $serviceData = ServiceData::find($serviceDataId);

        return $serviceData->delete();
    }
}
