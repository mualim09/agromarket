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

Route::get('/', [App\Http\Controllers\Dashboard\DUserController::class, 'index']);
Route::get('dashboard-admin', [App\Http\Controllers\Dashboard\DUserController::class, 'admin']);
Route::get('dashboard-seller', [App\Http\Controllers\Dashboard\DUserController::class, 'seller']);

Route::get('register', [App\Http\Controllers\RegisterController::class, 'index']);
Route::post('reg-store', [App\Http\Controllers\RegisterController::class, 'store']);
Route::get('login', [App\Http\Controllers\RegisterController::class, 'login'])->middleware('guest');
Route::post('login-store', [App\Http\Controllers\RegisterController::class, 'authenticate']);
Route::get('logout', [App\Http\Controllers\RegisterController::class, 'logout']);