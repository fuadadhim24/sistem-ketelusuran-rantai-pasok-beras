<?php

use App\Http\Controllers\AdminPengolahanController;
use App\Http\Controllers\faseController;
use App\Http\Controllers\gudangController;
use App\Http\Controllers\HasilPanenController;
use App\Http\Controllers\HasilPengolahanController;
use App\Http\Controllers\pengemasanController;
use App\Http\Controllers\pengolahanController;
use App\Http\Controllers\pengolahanEnController;
use App\Http\Controllers\lahanController;
use App\Http\Controllers\pengujianController;
use App\Http\Controllers\perlakuanController;
use App\Http\Controllers\settingsController;
use App\Http\Controllers\varietasPadiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;

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
    return view('landingPage.index');
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
// Route::get('/detailpengolahan_en/{id}', [pengolahanEnController::class, 'detail']);
// Route::get('/detailpengolahan/{id}', [pengolahanController::class, 'detail']);

Route::get('/hasil-pengolahan-in/{id}', [HasilPengolahanController::class, 'index']);
Route::get('/hasil-pengolahan-en/{id}', [HasilPengolahanController::class, 'index']);

// Route::get('/detailpengolahan_en', function () {
//     return view('hasilpengolahan_en');
// });
Route::resource('/pengolahan_in', pengolahanController::class);
Route::resource('/traceability', pengolahanEnController::class)->names('pengolahan_en');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard'); })->name('dashboard');

        Route::get('/produk', function () {
            return view('admin.produk.index');
        })->name('produk');
        
        Route::resource('Produk', ProdukController::class);
        Route::get('/Produk', [ProdukController::class, 'index'])->name('Produk.index');
        Route::post('/Produk/store', [ProdukController::class, 'store'])->name('Produk.store');
        Route::get('/Produks/{id}/edit', [ProdukController::class, 'edit'])->name('edit-produk');
        Route::put('/Produks/{id}/update', [ProdukController::class, 'update'])->name('Produk.update'); // Using POST with _method trick for form-data
        Route::delete('/Produks/{id}', [ProdukController::class, 'destroy'])->name('Produk.destroy');
        Route::get('/reload-content-Produk', [ProdukController::class, 'reloadContent'])->name('Produk.reload');
        Route::get('/produksi/data', [ProdukController::class, 'getProduksiData']);

    Route::get('/varietas-padi', [varietasPadiController::class, 'index'])->name('varietas-padi');
    Route::get('/varietas-padi/tambah-varietas', [varietasPadiController::class, 'tambahView'])->name('tambah-varietas');
    Route::post('/varietasPadi', [VarietasPadiController::class, 'store'])->name('varietasPadi.store');
    Route::delete('/hapusvarietas/{varietasPadi}', [VarietasPadiController::class, 'destroy'])->name('varietasPadi.destroy');
Route::get('/latest-data', [VarietasPadiController::class, 'latestData']);
    Route::get('/varietasPadi/{id}/edit', [VarietasPadiController::class, 'edit'])->name('edit-varietas');
    Route::put('/varietasPadi/{id}/update', [VarietasPadiController::class, 'update'])->name('update-varietas');
    Route::get('/reloadcontentvarietas', [VarietasPadiController::class, 'reloadContent'])->name('reload-content-varietas');

    Route::get('/fase', [faseController::class, 'index'])->name('fase');
    Route::get('/get-fase', [faseController::class, 'getfase'])->name('getfase');
    Route::get('/fase/perlakuan', [faseController::class, 'tambahView'])->name('perlakuan');
    Route::get('/fase/perlakuan/{id}', [faseController::class, 'tambahView']); // Add this route
    Route::get('/fases/{id}', [faseController::class, 'show']);
    Route::post('/fase/store', [faseController::class, 'store'])->name('fase.store');
    Route::get('/fase/{id}/edit', [faseController::class, 'edit'])->name('edit-fase');
    Route::delete('/fase/{id}/delete', [faseController::class, 'destroy'])->name('hapus-fase');
    Route::patch('/update/{id}', [faseController::class, 'update'])->name('update-fase');

    Route::resource('gudang', GudangController::class);
    Route::get('/gudang', [gudangController::class, 'index'])->name('gudang');
        Route::get('/getgudang', [gudangController::class, 'getgudangs'])->name('get.gudang');
        Route::post('/tambahgudang', [gudangController::class, 'store'])->name('gudang.store');
        Route::delete('/gudang/{id}/delete', [gudangController::class, 'destroy'])->name('gudang.delete');
        Route::put('/gudang/{id}', [gudangController::class, 'update'])->name('gudang.update');
        Route::get('/gudang/{id}/edit', [gudangController::class, 'edit'])->name('gudang.edit');
        Route::get('/gudang/{id}/view', [gudangController::class, 'show']);

    Route::get('/lahan', function () {
        return view('admin.lahan.index'); })->name('lahan');
        Route::get('/getlahan', [lahanController::class, 'getlahans'])->name('get.lahan');
        Route::post('/tambahlahan', [lahanController::class, 'store'])->name('lahan.store');
        Route::delete('/lahan/{id}/delete', [lahanController::class, 'destroy'])->name('lahan.delete');
        Route::put('/lahan/{id}', [LahanController::class, 'update'])->name('lahan.update');
        Route::get('/lahan/{id}/edit', [LahanController::class, 'edit'])->name('lahan.edit');
        Route::get('/lahan/{id}/view', [LahanController::class, 'show']);

    Route::get('/settings', [settingsController::class, 'index'])->name('settings');

    Route::resource('varietasPadis', VarietasPadiController::class);

    // hasil panen
    Route::get('/hasil-panen', [HasilPanenController::class, 'index'])->name('hasil-panen');
    // Route::post('/hasil-panen', [HasilPanenController::class, 'store'])->name('hasil-panen.store');
    // Route::put('/hasil-panen/{id}', [HasilPanenController::class, 'update'])->name('hasil-panen.update');
    // Route::delete('/hasil-panen/{id}', [HasilPanenController::class, 'destroy'])->name('hasil-panen.destroy');

    // pengolahan
    Route::get('/pengolahan', [AdminPengolahanController::class, 'index'])->name('pengolahan');
    Route::get('/pengolahan-fetch', [AdminPengolahanController::class, 'fetchPengolahan'])->name('pengolahan.fetch');
    Route::get('/fetch-unpengolahan', [AdminPengolahanController::class, 'fetchUnPengolahan'])->name('unpengolahan.fetch');
    Route::post('pengolahan/store', [AdminPengolahanController::class, 'store'])->name('pengolahan.store');
    Route::delete('/pengolahan/{id}/delete', [AdminPengolahanController::class, 'destroy'])->name('pengolahan.destroy');
    Route::get('/pengolahan/{id}/edit', [AdminPengolahanController::class, 'edit'])->name('pengolahan.edit');
    Route::put('/pengolahan/{id}/update', [AdminPengolahanController::class, 'update'])->name('pengolahan.update');
    
    //pengujian
    Route::get('/pengujian', [pengujianController::class, 'index'])->name('pengujian');
    Route::get('/pengujian/tambah-pengujian', [pengujianController::class, 'tambahView'])->name('tambah-pengujian');
    Route::get('/fetch-pengolahan', [pengujianController::class, 'getProduksiWithoutPengujian'])->name('fetch.pengolahan');
    Route::get('/fetch-pengujian', [pengujianController::class, 'fetchPengujian'])->name('pengujian.fetch');
    Route::post('/pengujian/store', [pengujianController::class, 'store'])->name('pengujian.store');
    Route::delete('/pengujian/{id}/delete', [pengujianController::class, 'destroy'])->name('pengujian.destroy');
    
    // pengemasan
    Route::get('/pengemasan', [PengemasanController::class, 'index'])->name('pengemasan');
    Route::get('/fetch-pengemasan', [PengemasanController::class, 'fetchPengemasan'])->name('pengemasan.fetch');
    Route::get('/fetch-un-pengemasan', [PengemasanController::class, 'fetchUnPengemasan'])->name('un-pengemasan.fetch');
    Route::post('/pengemasan/store', [PengemasanController::class, 'store'])->name('pengemasan.store');
});

// landing page
Route::get('/products', function() {return view('landingPage.product');})->name('products');
Route::get('/about-us', function() {return view('landingPage.about');})->name('about');
Route::get('/blog', function() {return view('landingPage.blog');})->name('blog');
Route::get('/contact', function() {return view('landingPage.contact');})->name('contact');
Route::get('/feature', function() {return view('landingPage.feature');})->name('feature');
Route::get('/testimonial', function() {return view('landingPage.testimonial');})->name('testimonial');
