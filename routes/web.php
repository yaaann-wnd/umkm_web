<?php

use App\Http\Controllers\PembuatController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\ProdukController;
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

Route::view('/', 'home')->name('home');
Route::view('/informasi', 'admin.informasi', ['type_menu' => 'informasi'])->name('informasi');


Route::resource('produk', ProdukController::class);
Route::resource('pembuat', PembuatController::class);
Route::resource('penjualan', PenjualanController::class);

Route::get('/dashboard', [ProdukController::class, 'dashboard'])->name('dashboard');
