<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServiceDataController;
use App\Http\Controllers\UserController;
use Ganimed\AnalystPackage\Controllers\ApiPointController;
use Ganimed\AnalystPackage\Controllers\PageController;
use Ganimed\AnalystPackage\Controllers\SiteController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Config;

Route::get('/', function () {
    return view('welcome');
});


Route::middleware(['auth', 'is_admin'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware('verified')->name('dashboard');

    Route::controller(ProfileController::class)
        ->name('profile')
        ->prefix('/profile')
        ->group(function () {
            Route::get('', 'edit')->name('.edit');
            Route::patch('', 'update')->name('.update');
            Route::put('', 'channelsUpdate')->name('.channels-update');
            Route::delete('', 'destroy')->name('.destroy');
        });

    Route::get('user');

    Route::controller(UserController::class)
        ->name('user')
        ->prefix('user')
        ->group(function () {
            Route::get('', 'index')->name('.index');
            Route::get('{user}', 'show')->name('.show');
            Route::get('{user}/edit-role', 'editRole')->name('.edit-role');
            Route::put('{user}/update-role', 'updateRole')->name('.update-role');
            Route::delete('{user}', 'destroy')->name('.delete');
        });

    Route::controller(ApiPointController::class)
        ->name('api-point')
        ->prefix('api-point')
        ->group(function () {
            Route::get('', 'index')->name('.index');
            Route::get('{id}', 'show')->name('.show');
        });

    Route::name('site')
        ->controller(SiteController::class)
        ->prefix('site/')
        ->group(function () {
            Route::get('archived', 'showArchived')->name('.archived');
            Route::get('party', 'findByCollaborator')->name('.party');
            Route::get('collaborators', 'showCollaborators')->name('.collaborators');
            Route::get('{site}/add-user', 'addCollaborator')->name('.add-user');
            Route::post('{site}/store-user', 'storeCollaborators')->name('.store-user');
            Route::delete('remove-user', 'destroyCollaborator')->name('.remove-user');
            Route::patch('{site}/update-used-channels', 'updateUsedChannels')->name('.update-used-channels');
        });

    Route::resource('site', SiteController::class)->except('show');
    Route::resource('site.page', PageController::class)->middleware('site.id');

    Route::controller(AdminController::class)
        ->name('admin')
        ->prefix('admin')
        ->group(function () {
            Route::post('site', 'runSiteCheckup')->name('.check-site');
            Route::post('api', 'runApiCheckup')->name('.check-api');
            Route::get('edit-config', 'editConfig')->name('.edit-config');
        });

    Route::controller(ServiceController::class)
        ->name('service')
        ->prefix('service')
        ->group(function () {
            Route::get('', 'index')->name('.index');
            Route::get('{service}/edit', 'edit')->name('.edit');
            Route::put('{service}', 'update')->name('.update');
            Route::delete('{service}', 'destroy')->name('.destroy');
        });

    Route::controller(ServiceDataController::class)
        ->name('serviceData')
        ->prefix('serviceData')
        ->group(function () {
            Route::get('', 'all');
            Route::get('{serviceData}/edit', 'edit')->name('.edit');
            Route::put('{serviceData}', 'update')->name('.update');
            Route::delete('{serviceData}', 'edit')->name('.destroy');
        });
});

Route::get('test', function () {
    $services = Config::get('api_processing_services');

    $res = [];
    foreach ($services as $serviceName => $service) {
//        $res[$serviceName] = $serviceName;

        foreach ($service as $data) {
            $res[] = [
                'endpoint' => $data['uri'],
                'method' => $data['method'],
                'params' => array_filter([
                    'query_params' => $data['query_params'] ?? null,
                    'path_params' => $data['path_params'] ?? null,
                    'form_params' => $data['form_params'] ?? null,
                ]),
                'success_response' => $data['response']['success']
            ];
        }
    }

    return $res;
});

require __DIR__ . '/auth.php';
