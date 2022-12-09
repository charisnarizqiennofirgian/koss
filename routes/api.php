<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// import controller
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\KostController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\KotaController;
// mekanisme resource
/**
 * import controller
 * - fasilitas
 */
// use App\Http\Controllers\APIs\Fasilitas\FasilitasController;

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
 * ROUTES APIs aplikasi kost mekanisme resource
 * - fasilitas
 */
// Route::resource('fasilitas', FasilitasController::class);

/**
 * ROUTES APIs aplikasi kost
 */
/**
 * endpoint fasilitas
 * - get
 * - get detail
 * - create data
 * - update data
 * - delete data
 */
Route::get('fasilitas-api', [FasilitasController::class, 'fasilitasIndex']);
Route::get('fasilitas-api/{id}', [FasilitasController::class, 'fasilitasShow']);
Route::post('fasilitas-api', [FasilitasController::class, 'fasilitasStore']);
Route::put('fasilitas-api/{id}', [FasilitasController::class, 'fasilitasUpdate']);
Route::delete('fasilitas-api/{id}', [FasilitasController::class, 'fasilitasDestroy']);
/**
 * endpoint kota
 * - get
 * - get detail
 * - create data
 * - update data
 * - delete data
 */
Route::get('kota-api', [KotaController::class, 'kotaIndex']);
Route::get('kota-api/{id}', [KotaController::class, 'kotaShow']);
Route::post('kota-api', [KotaController::class, 'kotaStore']);
Route::put('kota-api/{id}', [KotaController::class, 'kotaUpdate']);
Route::delete('kota-api/{id}', [KotaController::class, 'kotaDestroy']);

Route::get('kost-api', [KostController::class, 'kostIndex']);
Route::get('kost-api/{id}', [KostController::class, 'kostShow']);
Route::post('kost-api', [KostController::class, 'kostStore']);
Route::put('kost-api/{id}', [KostController::class, 'kostUpdate']);
Route::delete('kost-api/{id}', [KostController::class, 'kostDestroy']);

Route::get('pembayaran-api', [PembayaranController::class, 'pembayaranIndex']);
Route::get('pembayaran-api/{id}', [PembayaranController::class, 'pembayaranShow']);