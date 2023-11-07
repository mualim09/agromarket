<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('coba', function () {
    return view('coba');
});

Route::get('/', [App\Http\Controllers\Dashboard\DashboardController::class, 'index']);
Route::get('dashboard-admin', [App\Http\Controllers\Dashboard\DashboardController::class, 'admin']);

Route::get('register', [App\Http\Controllers\RegisterController::class, 'index']);
Route::post('reg-store', [App\Http\Controllers\RegisterController::class, 'store']);
Route::get('login', [App\Http\Controllers\RegisterController::class, 'login'])->name('login')->middleware('guest');
Route::post('login-store', [App\Http\Controllers\RegisterController::class, 'authenticate']);
Route::get('logout', [App\Http\Controllers\RegisterController::class, 'logout']);

Route::middleware(['auth'])->group(function () {
    Route::get('dashboard-seller', [App\Http\Controllers\Dashboard\DashboardController::class, 'seller']);
    Route::get('pembibitan-seller', [App\Http\Controllers\Product\ProductSellerController::class, 'bibit']);
    Route::get('pupuk-seller', [App\Http\Controllers\Product\ProductSellerController::class, 'pupuk']);
    Route::get('pestisida-seller', [App\Http\Controllers\Product\ProductSellerController::class, 'pestisida']);
    Route::get('perlengkapan-seller', [App\Http\Controllers\Product\ProductSellerController::class, 'perlengkapan']);
    Route::get('create-product', [App\Http\Controllers\Product\ProductSellerController::class, 'create']);
    Route::post('store-product', [App\Http\Controllers\Product\ProductSellerController::class, 'store']);
    
});