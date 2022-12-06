<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// import controller
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\KostController;
use App\Http\Controllers\PembayaranController;

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

/**
 * ROUTES APIs aplikasi kost
 */
Route::get('fasilitas-api', [FasilitasController::class, 'fasilitasIndex']);
Route::get('fasilitas-api/{id}', [FasilitasController::class, 'fasilitasShow']);
Route::post('fasilitas-api', [FasilitasController::class, 'fasilitasStore']);
Route::put('fasilitas-api/{id}', [FasilitasController::class, 'fasilitasUpdate']);
Route::delete('fasilitas-api/{id}', [FasilitasController::class, 'fasilitasDestroy']);

Route::get('kost-api', [KostController::class, 'kostIndex']);
Route::get('kost-api/{id}', [KostController::class, 'kostShow']);
Route::post('kost-api', [KostController::class, 'kostStore']);

Route::get('pembayaran-api', [PembayaranController::class, 'pembayaranIndex']);
Route::get('pembayaran-api/{id}', [PembayaranController::class, 'pembayaranShow']);