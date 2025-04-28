<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('groups')->group(function () {
    Route::get('/', [App\Http\Controllers\GroupController::class, 'dotIndex']);
    Route::get('/{id}', [App\Http\Controllers\GroupController::class, 'dotShow']);
    Route::get('/all', [App\Http\Controllers\GroupController::class, 'dotAll']);
    Route::post('/', [App\Http\Controllers\GroupController::class, 'dotCreate']);
    Route::put('/{id}', [App\Http\Controllers\GroupController::class, 'dotUpdate']);
}
);

Route::prefix('meets')->group(function () {
    Route::get('/', [App\Http\Controllers\MeetController::class, 'dotIndex']);
    Route::get('/{id}', [App\Http\Controllers\MeetController::class, 'dotShow']);
    Route::get('/all', [App\Http\Controllers\MeetController::class, 'dotAll']);
    Route::post('/', [App\Http\Controllers\MeetController::class, 'dotCreate']);
    Route::put('/{id}', [App\Http\Controllers\MeetController::class, 'dotUpdate']);
}
);

Route::prefix('request-types')->group(function () {
    Route::get('/', [App\Http\Controllers\RequestTypeController::class, 'dotIndex']);
    Route::get('/{id}', [App\Http\Controllers\RequestTypeController::class, 'dotShow']);
    Route::get('/all', [App\Http\Controllers\RequestTypeController::class, 'dotAll']);
    Route::post('/', [App\Http\Controllers\RequestTypeController::class, 'dotCreate']);
    Route::put('/{id}', [App\Http\Controllers\RequestTypeController::class, 'dotUpdate']);
}
);
