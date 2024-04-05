<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Http;
use Illuminate\View\View;

class AdminController
{
    public string $publicServerUrl;

    public function __construct()
    {
        $this->publicServerUrl = Config::get('constants.public_server_url');
    }


    /**
     * Return view with selected API config
     *
     *
     */
    public function editConfig(Request $request)
    {
        $configType = $request->query('config-type');


    }

    /**
     * Run page details update command
     *
     * @return JsonResponse
     */
    public function runSiteCheckup(): JsonResponse
    {
        Http::post($this->publicServerUrl . 'check/site');

        return response()->json(['message' => 'Проверка страниц пройдена!']);
    }

    /**
     * Run api points update command
     *
     * @return JsonResponse
     */
    public function runApiCheckup(): JsonResponse
    {
        Http::post($this->publicServerUrl . 'check/api');

        return response()->json(['message' => 'Проверка API пройдена!']);
    }
}
