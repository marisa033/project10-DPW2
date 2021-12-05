<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UserController;


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


Route::get('template', function () {
    return view('admin.template');
});

Route::get('register', function () {
    return view('register');
});


Route::get('admin/beranda', [HomeController::class, 'showBeranda']);
Route::get('admin/profil', [HomeController::class, 'showProfil']);
Route::get('admin/kategori', [HomeController::class, 'showKategori']);

Route::get('test/{produk}/{hargaMin?}/{hargaMax?}', [HomeController::class, 'test']);

Route::prefix('admin')->middleware('auth')->group(function(){
    Route::post('produk/filter', [ProdukController::class, 'filter']);
    Route::resource('produk', ProdukController::class);
    Route::resource('user', UserController::class);
});


// tampilan depan
Route::get('/', [indexController::class, 'showindex']);
Route::get('/fashion', [indexController::class, 'showFashion']);
Route::get('/electronic', [indexController::class, 'showElectronic']);
Route::get('/jewellery', [indexController::class, 'showJewellery']);
Route::get('/keranjang', [indexController::class, 'showKeranjang']);
Route::get('/detail', [indexController::class, 'showDetail']);

Route::get('login', [AuthController::class, 'showLogin'])->name('login');
Route::post('login', [AuthController::class, 'LoginProcess']);
Route::get('Logout', [AuthController::class, 'Logout']);