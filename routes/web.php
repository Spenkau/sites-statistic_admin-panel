<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

    Route::controller(Ganimed\AnalystPackage\Controllers\SiteController::class)
        ->name('site')
        ->prefix('site')
        ->group(function () {
            Route::prefix('{site}')->group(function () {
                Route::get('', 'show')->name('.show');
                Route::get('edit', 'edit')->name('.edit');
                Route::put('', 'update')->name('.update');
                Route::get('add-user', 'addCollaborator')->name('.add-user');
                Route::post('store-user', 'storeCollaborators')->name('.store-user');
            });
            Route::delete('remove-user', 'destroyCollaborator')->name('.remove-user');
            Route::delete('{user}', 'destroy')->name('.delete');
        });
});

require __DIR__ . '/auth.php';
