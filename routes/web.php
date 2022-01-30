<?php

use App\Http\Controllers\midtransController;
use App\Http\Controllers\rajaongkirController;
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
Route::get('/province',[rajaongkirController::class,'initProvince'])->name('province');
Route::get('/city/{id}',[rajaongkirController::class,'initCity'])->name('city');
Route::get('/origin={city_origin}&destination={city_destination}&weight={weight}&courier={courier}',[rajaongkirController::class,'initCost']);
Route::get('/bayar',[midtransController::class,'paymentgateway']);
