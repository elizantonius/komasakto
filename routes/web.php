<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MyController;

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
    return view('Auth');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Admin
Route::get('/my', function () {
    return view('My');
});
Route::get('/baranginp', function () {
    return view('barangmasuk');
});
Route::get('/barangout', function () {
    return view('barangkeluar');
});
Route::post('/auth/login', function () {
    return view('My');
});

Route::get('/auth/logout', function () {
    return view('Auth');
});

// Route::get('my', [MyController::class, 'show']);

Route::get('/TabelBarang', function () {
    return view('tabelbarang');
});
Route::get('/satuan', function () {
    return view('inputsatuan');
});
Route::post('/satuan/tambahdata', function () {
    return view('inputsatuan');
});
