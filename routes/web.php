<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\MerekController;
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
Route::get('shop', [FrontController::class, 'shop']);
Route::get('/produk/{id}', [FrontController::class, 'show'])->name('details');

Auth::routes();
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::resource('merek', MerekController::class);
    Route::resource('brand', BrandController::class);
    Route::resource('kategori', KategoriController::class);
    Route::resource('produk', ProdukController::class);
    Route::resource('jenis', JenisController::class);

});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
