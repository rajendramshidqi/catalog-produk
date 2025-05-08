<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\MerekController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukController;
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
Route::get('/', [FrontController::class, 'index']);

Route::get('/single_product_details', function () {
    return view('single_product_details');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('merek', MerekController::class);
Route::resource('brand', BrandController::class);
Route::resource('kategori', KategoriController::class);
Route::resource('produk', ProdukController::class);
Route::resource('jenis', JenisController::class);
