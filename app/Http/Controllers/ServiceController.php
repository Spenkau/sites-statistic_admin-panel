<?php

namespace App\Http\Controllers;

use App\Http\Requests\Service\StoreRequest;
use App\Http\Requests\Service\UpdateRequest;
use App\Models\Service;
use App\Services\ServiceService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\View\View;

class ServiceController extends Controller
{
    public function __construct(public ServiceService $serviceService) {}

    public function index(Request $request): View
    {
        $services = $this->serviceService->all($request->all());

//        return $services;
        return view('services.index', ['services' => $services]);
    }

    public function edit(Service $service): View
    {
        return view('services.edit', ['service' => $service]);
    }

    public function store(StoreRequest $request): JsonResource
    {
        $data = $request->validated();

        return $this->serviceService->store($data);
    }

    public function update(Service $service, UpdateRequest $request): RedirectResponse
    {
        $data = $request->validated();

        $this->serviceService->update($service->id, $data);

        return redirect()->back();
    }

    public function destroy(Service $service): ?bool
    {
        return $service->delete();
    }
}
