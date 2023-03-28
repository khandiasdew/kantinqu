<?php

use App\Http\Controllers\barangController;
use App\Http\Controllers\kantinController;
use App\Http\Controllers\pemasokController;
use App\Http\Controllers\sellerController;
use App\Http\Controllers\supplierController;
use App\Models\supplier;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('barang', barangController::class);
Route::resource('supplier', supplierController::class);
Route::resource('kantin', kantinController::class);
Route::resource('seller', sellerController::class);
Route::resource('pemasok', pemasokController::class);

