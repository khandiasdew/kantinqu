<?php

use App\Http\Controllers\barangController;
use App\Http\Controllers\kantinController;
use App\Http\Controllers\kasirController;
use App\Http\Controllers\sellerController;
use App\Http\Controllers\supplierController;
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
    return view('index');
});

Route::resource('barang', barangController::class);
Route::resource('supplier', supplierController::class);
Route::resource('kantin', kantinController::class);
Route::resource('seller', sellerController::class);
Route::resource('kasir', kasirController::class);

// delete route
Route::get('/barang/{barang}/delete',[barangController::class,'delete']);
Route::get('/supplier/{supplier}/delete',[supplierController::class,'delete']);
Route::get('/seller/{seller}/delete',[sellerController::class,'delete']);

