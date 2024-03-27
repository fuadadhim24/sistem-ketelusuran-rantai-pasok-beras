<?php

use App\Http\Controllers\faseController;
use App\Http\Controllers\gudangController;
use App\Http\Controllers\pengujianController;
use App\Http\Controllers\perlakuanController;
use App\Http\Controllers\settingsController;
use App\Http\Controllers\varietasPadiController;
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

    Route::get('/pengujian', [pengujianController::class,'index'])->name('pengujian');
    Route::get('/pengujian/tambah-pengujian', [pengujianController::class,'tambahView'])->name('tambah-pengujian');

    Route::get('/varietas-padi', [varietasPadiController::class,'index'])->name('varietas-padi');
    Route::get('/varietas-padi/tambah-varietas', [varietasPadiController::class,'tambahView'])->name('tambah-varietas');

    Route::get('/fase', [faseController::class,'index'])->name('fase');
    Route::get('/fase/perlakuan', [perlakuanController::class,'index'])->name('perlakuan');

    Route::get('/gudang', [gudangController::class, 'index'])->name('gudang');
    Route::post('/gudang/store', [gudangController::class, 'store'])->name('gudang-store');

    Route::get('/lahan', function (){ return view('admin.lahan.index');})->name('lahan');
    Route::get('/lahan/tambah-lahan', function (){ return view('admin.lahan.tambah');})->name('tambah-lahan');

    Route::get('/settings', [settingsController::class,'index'])->name('settings');

    Route::resource('varietasPadis', VarietasPadiController::class);
});

