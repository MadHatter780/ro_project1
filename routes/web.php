<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrasiController;

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

Route::group(['prefix' => 'home'], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home.index');
});


Route::get('/register', function () {
    return view('register.register');
});

Route::group(['prefix' => 'registrasi'], function () {
    Route::get('/', [RegistrasiController::class, 'index'])->name('regis.index');
    Route::post('/regis', [RegistrasiController::class, 'store'])->name('regis.store');
});


Route::group(['prefix' => 'login'], function () {
    Route::get('/', [LoginController::class, 'index'])->name('login.index');
    Route::post('/processLogin', [LoginController::class, 'proccess'])->name('login.proccess');
});


Route::group(['prefix' => 'barang'], function () {
    Route::get('/', [BarangController::class, 'index'])->name('barang.index');
    Route::post('/store', [BarangController::class, 'store'])->name('barang.store');
});
