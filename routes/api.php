<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HabitatController;
use App\Http\Controllers\RecintoController;
use App\Http\Controllers\AnimalController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/ 


    Route::post('/loginApi', [AuthController::class, 'login']);

    Route::get('/apiAllHabitat', [HabitatController::class, 'apiHabitats']);
    Route::get('/apiHabitat/{id}', [HabitatController::class, 'apiHabitat']);

    Route::get('/apiAllRecinto', [RecintoController::class, 'apiRecintos']);
    Route::get('/apiRecinto/{id}', [RecintoController::class, 'apiRecinto']);

    Route::get('/apiAllAnimal', [AnimalController::class, 'apiAnimales']);
    Route::get('/apiAnimal/{id}', [AnimalController::class, 'apiAnimal']);

    Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
    });

