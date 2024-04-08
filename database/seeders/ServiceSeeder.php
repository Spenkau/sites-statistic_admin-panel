<?php

namespace Database\Seeders;

use App\Models\Service;
use App\Models\ServiceData;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Config;

class ServiceSeeder extends Seeder
{

    public array $serviceKeys = [
        'api_processing_services',
        'api_preprod_v2_services'
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->serviceKeys as $key) {
            $config = Config::get($key);

            foreach ($config as $serviceName => $service) {
                $newService = Service::factory()->create([
                    'name' => $serviceName,
                    'api' => 'processing'
                ]);

                foreach ($service as $item) {
                    $serviceId = $newService->id;
                    ServiceData::factory()->create([
                        'service_id' => $serviceId,
                        'endpoint' => $item['uri'],
                        'method' => $item['method'],
                        'params' => json_encode(array_filter([
                            'query_params' => $item['query_params'] ?? null,
                            'path_params' => $item['path_params'] ?? null,
                            'form_params' => $item['form_params'] ?? null,
                        ])),
                        'success_response' => json_encode($item['response']['success']),
                        'error_response' => json_encode($item['response']['success'])
                    ]);
                }
            }
        }
    }
}
