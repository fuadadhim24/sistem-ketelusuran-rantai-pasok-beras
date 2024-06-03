<?php

use App\Http\Controllers\faseController;
use App\Http\Controllers\gudangController;
use App\Http\Controllers\pengolahanController;
use App\Http\Controllers\pengolahanEnController;
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
Route::get('/welcome_en', function () {
    return view('welcome_en');
});
// Route::get('/pengolahan', function () {
//     return view('lendingpage2');
// });
// Route::get('/pengolahan_en', function () {
//     return view('pengolahan_en');
// });
// Route::get('/detailpengolahan', function () {
//     return view('hasilpengolahan');
// });
Route::get('/detailpengolahan/{id}', [pengolahanController::class, 'detail']);
Route::get('/detailpengolahan_en/{id}', [pengolahanEnController::class, 'detail']);

// Route::get('/detailpengolahan_en', function () {
//     return view('hasilpengolahan_en');
// });
Route::resource('/pengolahan', pengolahanController::class);
Route::resource('/pengolahan_en', pengolahanEnController::class);



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard'); })->name('dashboard');
    Route::get('/produk', function () {
        return view('admin.produk.index'); })->name('produk');

    Route::get('/pengujian', [pengujianController::class, 'index'])->name('pengujian');
    Route::get('/pengujian/tambah-pengujian', [pengujianController::class, 'tambahView'])->name('tambah-pengujian');

    Route::get('/varietas-padi', [varietasPadiController::class, 'index'])->name('varietas-padi');
    Route::get('/varietas-padi/tambah-varietas', [varietasPadiController::class, 'tambahView'])->name('tambah-varietas');
    Route::post('/varietasPadi', [VarietasPadiController::class, 'store'])->name('varietasPadi.store');
    Route::delete('/hapusvarietas/{varietasPadi}', [VarietasPadiController::class, 'destroy'])->name('varietasPadi.destroy');
    Route::get('/latest-data', [VarietasPadiController::class, 'latestData']);
    Route::get('/varietasPadi/{id}/edit', [VarietasPadiController::class, 'edit'])->name('edit-varietas');
    Route::put('/varietasPadi/{id}/update', [VarietasPadiController::class, 'update'])->name('update-varietas');
    Route::get('/reloadcontentvarietas', [VarietasPadiController::class, 'reloadContent'])->name('reload-content-varietas');

    Route::get('/fase', [faseController::class, 'index'])->name('fase');
    Route::get('/fase/perlakuan', [perlakuanController::class, 'index'])->name('perlakuan');
    Route::post('/fase/store', [FaseController::class, 'store'])->name('fase.store');
    Route::get('/fase/{id}/edit', [FaseController::class, 'edit'])->name('edit-fase');
    Route::delete('/fase/{id}/delete', [FaseController::class, 'destroy'])->name('hapus-fase');
    Route::patch('/update/{id}', [FaseController::class, 'update'])->name('update-fase');
    Route::get('/reload-content', [FaseController::class, 'reloadContent'])->name('reload.content');


    Route::get('/gudang', [gudangController::class, 'index'])->name('gudang');
    Route::post('/gudang/store', [gudangController::class, 'store'])->name('gudang-store');

    Route::get('/lahan', function () {
        return view('admin.lahan.index'); })->name('lahan');
    Route::get('/lahan/tambah-lahan', function () {
        return view('admin.lahan.tambah'); })->name('tambah-lahan');

    Route::get('/settings', [settingsController::class, 'index'])->name('settings');

    Route::resource('varietasPadis', VarietasPadiController::class);

});

