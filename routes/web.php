<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () { return view('admin.dashboard');})->name('dashboard');
    Route::get('/produk', function ( ) { return view('admin.produk.index');})->name('produk');

    Route::get('/pengujian', function () { return view('admin.klasifikasiMutu.index');})->name('pengujian');
    Route::get('/pengujian/tambah-pengujian', function() { return view('admin.klasifikasiMutu.tambah');})->name('tambah-pengujian');

    Route::get('/varietas-padi', function (){ return view('admin.varietasPadi.index');})->name('varietas-padi');
    Route::get('/varietas-padi/tambah-varietas', function (){ return view('admin.varietasPadi.tambah');})->name('tambah-varietas');
    
    Route::get('/fase', function (){ return view('admin.fase.index');})->name('fase');
    Route::get('/fase/tambah-fase', function (){ return view('admin.fase.tambah');})->name('tambah-fase');

    Route::get('/gudang', function (){ return view('admin.gudang.index');})->name('gudang');
    Route::get('/gudang/tambah-gudang', function (){ return view('admin.gudang.tambah');})->name('tambah-gudang');

    Route::get('/lahan', function (){ return view('admin.lahan.index');})->name('lahan');
    Route::get('/lahan/tambah-lahan', function (){ return view('admin.lahan.tambah');})->name('tambah-lahan');
});