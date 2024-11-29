<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TrabajamonController;
use App\Http\Controllers\Api\CombinacionController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('trabajamon', [TrabajamonController::class, 'getAll']);
Route::post('trabajamon', [TrabajamonController::class, 'postOne']);
Route::get('trabajamon/{id}', [TrabajamonController::class, 'getOne']);
Route::put('trabajamon/{id}', [TrabajamonController::class, 'update']);
Route::delete('trabajamon/{id}', [TrabajamonController::class, 'destroy']);

Route::get('combinacion/{id}', [CombinacionController::class, 'getOne']);