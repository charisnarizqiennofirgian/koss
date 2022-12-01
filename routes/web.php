<?php

use Illuminate\Support\Facades\Route;
// import controller
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\KostController;
use App\Http\Controllers\PembayaranController;
// import controller subfolder
use App\Http\Controllers\Customer\InfoKostController;
use App\Http\Controllers\Auth\UsersController;
use App\Http\Controllers\DashboardController;
use App\Http\Middleware\Role;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

// Routing Landing Page
// Route::get('/', function () {
//     return view('landingpage.home');
// });

// Route::get('/home1', function () {
//     return view('landingpage.home');
// });

// Routing Landing Page
Route::get('/coba/{id}', [UsersController::class], 'show');

Route::resource('/', InfoKostController::class ); //well

Route::get('/beranda', function () {
    return view('landingpage.home');
})->name('beranda'); //well /**NOTE DI TAMBAH NAME */

Route::get('/daftar', function () {
    return view('landingpage.daftar');
}); //well

route::get('/dashboards', function () {
    return view('landingpage.dashboard');
}); //well

route::get('/dashboard-kos', function () {
    return view('landingpage.dashboard-kos');
}); //well


Route::get('/testimonial', function () {
    return view('landingpage.testimonial');
}); //non-use

Route::get('/info_kamar', function () {
    return view('landingpage.info_kamar');
}); //non-use

Route::get('/checkout', function () {
    return view('landingpage.checkout');
}); //non-use

Route::get('/detail_product', function () {
    return view('landingpage.detail_product');
}); //non-use

Route::get('/payment', function () {
    return view('landingpage.payment');
}); //non-use

// ROUTE ADMIN


Route::middleware(['auth', 'isadmin'])->group(function () {
    Route::get('/administrator', function () {
        return view('admin.home');
    })->name('admin.dashboard');
    Route::resource('/fasilitas', FasilitasController::class);
    Route::resource('/kost', KostController::class);
    Route::resource('/pembayaran', PembayaranController::class);
    Route::get('kost-edit/{id}', [KostController::class, 'edit']);
    Route::get('fasilitas-edit/{id}', [FasilitasController::class, 'edit']);
    Route::get('detail_product/{id}', [KostController::class, 'detail']);
    Route::get('generate-pdf', [KostController::class, 'generatePDF']);
    Route::get('kost-pdf', [KostController::class, 'kostPDF']);
    Route::get('kost-excel', [KostController::class, 'exportExcel']);
    Route::get('fasilitas-pdf', [FasilitasController::class, 'fasilitasPDF']);
    Route::get('pembayaran-pdf', [PembayaranController::class, 'pembayaranPDF']);
    Route::get('pembayaran-excel', [PembayaranController::class, 'pembayaranExcel']);
    Route::resource('/users', UsersController::class);
});

Route::get('pemilik', function () {
    return 'Pemilik';
})->middleware(['auth', 'owner']);


// Route Access Denied
Route::get('/access-denied', function () {
    return view('admin.access_denied');
})->middleware('auth')->name('access-denied');

// Route Dashboard
Route::get('dashboard', [DashboardController::class, 'index']);

/**
 * ROUTE CUSTOMER
 * - info koss
 * - detail kamar
 */
Route::resource('kamar', InfoKostController::class)->middleware('auth');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');