<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\SlideController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoryController;
use App\Http\Controllers\PelangganController;

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

// Route::get('/', function () {
//     return view('home');
// });

Route::controller(AuthController::class)->group(function(){
Route::get('login', 'login')->name('login');
Route::post('proses_login', 'proses_login');
Route::get('/', 'logout');
Route::get('/register','daftar');
Route::post('/register','daftarshow');
});

Route::get('beranda/{status}',[HomeController:: class,'showBeranda']);
Route::get('kategori',[HomeController:: class,'showKategori']);
Route::get('promo',[HomeController:: class,'showPromo']);
Route::get('pelanggan',[HomeController:: class,'showPelanggan']);
Route::get('supplier',[HomeController:: class,'showSupplier']);
Route::get('test-collection', [HomeController:: class, 'testCollection']);
Route::get('/', [ClientController:: class, 'home']);
Route::get('card/{id}', [ClientController:: class, 'showCard']);
Route::get('show/{id}', [ClientController:: class, 'show']);
Route::post('home/filter', [ClientController:: class, 'filter']);
Route::get('templatecustomer.base',[ClientController:: class,'Template']);





Route::group(['middleware' => ['auth','Ceklogin:admin,staff']],function(){
    Route::get('template.base',[HomeController:: class,'showTemplate']);
    Route::get('beranda',[HomeController:: class,'showBeranda']);

    Route::get('user', [UserController::class,'index']);
    Route::get('user/create', [UserController::class,'create']);
    Route::post('user', [UserController::class,'store']);
    Route::get('user/{user}', [UserController::class, 'show']);
    Route::get('user/{user}/edit', [UserController::class, 'edit']);
    Route::put('user/{user}', [UserController::class, 'update']);
    Route::delete('user/{user}', [UserController::class, 'destroy']);

    Route::post('terima', [ProdukController::class, 'terima'])->name('terima');
    Route::post('tolak', [ProdukController::class, 'tolak'])->name('tolak');
    Route::post('produk/filter', [ProdukController:: class, 'filter']);
    Route::get('produk',[ProdukController:: class,'index']);
    Route::get('produk/create',[ProdukController:: class,'create']);
    Route::post('produk',[ProdukController:: class,'store']);
    Route::get('produk/{produk}',[ProdukController:: class, 'show']);
    Route::get('produk/{produk}/edit',[ProdukController:: class, 'edit']);
    Route::put('produk/{produk}',[ProdukController:: class, 'update']);
    Route::delete('produk/{produk}',[ProdukController:: class, 'destroy']);

    Route::get('kategori', [KategoryController::class, 'index']);
    Route::get('kategori/create', [KategoryController::class, 'create']);
    Route::post('kategori', [KategoryController::class, 'store']);
    Route::get('kategori/{kategori}', [KategoryController::class, 'show']);
    Route::get('kategori/{kategori}/edit', [KategoryController::class, 'edit']);
    Route::put('kategori/{kategori}', [KategoryController::class, 'update']);
    Route::delete('kategori/{kategori}', [KategoryController::class, 'destroy']);

    Route::post('diterima', [PromoController::class, 'diterima'])->name('diterima');
    Route::post('ditolak', [PromoController::class, 'ditolak'])->name('ditolak');
    Route::get('promo',[PromoController:: class,'index']);
    Route::get('promo/create',[PromoController:: class,'create']);
    Route::post('promo',[PromoController:: class,'store']);
    Route::get('promo/{promo}',[PromoController:: class, 'show']);
    Route::get('promo/{promo}/edit',[PromoController:: class, 'edit']);
    Route::put('promo/{promo}',[PromoController:: class, 'update']);
    Route::delete('promo/{promo}',[PromoController:: class, 'destroy']);

    Route::get('pelanggan',[PelangganController:: class,'index']);
    Route::get('pelanggan/create',[PelangganController:: class,'create']);
    Route::post('pelanggan',[PelangganController:: class,'store']);
    Route::get('pelanggan/{pelanggan}',[PelangganController:: class, 'show']);
    Route::get('pelanggan/{pelanggan}/edit',[PelangganController:: class, 'edit']);
    Route::put('pelanggan/{pelanggan}',[PelangganController:: class, 'update']);
    Route::delete('pelanggan/{pelanggan}',[PelangganController:: class, 'destroy']);

    Route::get('daftar',[DaftarController:: class,'index']);
    Route::get('daftar/create',[DaftarController:: class,'create']);
    Route::post('daftar',[DaftarController:: class,'store']);
    Route::get('daftar/{daftar}',[DaftarController:: class, 'show']);
    Route::get('daftar/{daftar}/edit',[DaftarController:: class, 'edit']);
    Route::put('daftar/{daftar}',[DaftarController:: class, 'update']);
    Route::delete('daftar/{daftar}',[DaftarController:: class, 'destroy']);

    Route::get('slide',[SlideController:: class,'index']);
    Route::get('slide/create',[SlideController:: class,'create']);
    Route::post('slide',[SlideController:: class,'store']);
    Route::get('slide/{slide}',[SlideController:: class, 'show']);
    Route::get('slide/{slide}/edit',[SlideController:: class, 'edit']);
    Route::put('slide/{slide}',[SlideController:: class, 'update']);
    Route::delete('slide/{slide}',[SlideController:: class, 'destroy']);
    Route::post('aktif', [SlideController::class, 'aktif'])->name('aktif');
    Route::post('nonaktif', [SlideController::class, 'nonaktif'])->name('nonaktif');
});

// Route::group(['middleware' => ['auth','Ceklogin:staff']],function(){
// Route::get('template.base',[HomeController:: class,'showTemplate']);
// Route::get('beranda',[HomeController:: class,'showBeranda']);
// Route::post('produk/filter', [ProdukController:: class, 'filter']);
// Route::get('produk',[ProdukController:: class,'index']);
// Route::get('produk/create',[ProdukController:: class,'create']);
// Route::post('produk',[ProdukController:: class,'store']);
// Route::get('produk/{produk}',[ProdukController:: class, 'show']);
// Route::get('produk/{produk}/edit',[ProdukController:: class, 'edit']);
// Route::put('produk/{produk}',[ProdukController:: class, 'update']);
// Route::delete('produk/{produk}',[ProdukController:: class, 'destroy']);
// });
