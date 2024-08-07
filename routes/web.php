<?php

use App\Http\Controllers\AdminPengolahanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\faseController;
use App\Http\Controllers\gudangController;
use App\Http\Controllers\HasilPanenController;
use App\Http\Controllers\HasilPengolahanController;
use App\Http\Controllers\PengemasanController;
use App\Http\Controllers\pengolahanController;
use App\Http\Controllers\pengolahanEnController;
use App\Http\Controllers\lahanController;
use App\Http\Controllers\landingPageController;
use App\Http\Controllers\pengujianController;
use App\Http\Controllers\perlakuanController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\settingsController;
use App\Http\Controllers\varietasPadiController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\produkController;

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

Route::get('/', [landingPageController::class,'index']);
Route::get('/in', [landingPageController::class,'index_in']);
Route::get('/index-show', [landingPageController::class,'show']);
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
Route::get('/hasil-pengolahan-en/{id}', [HasilPengolahanController::class, 'indexEn']);

// Route::get('/detailpengolahan_en', function () {
//     return view('hasilpengolahan_en');
// });
Route::resource('/pengolahan_in', pengolahanController::class);
Route::resource('/traceability', pengolahanEnController::class)->names('pengolahan_en');
Route::get('/ketertelusuran', function() {return view('landingPage.pengolahan_id');})->name('pengolahan_in');
// Route::resource('/traceability_in', pengolahanEnController::class)->names('pengolahan_in');



Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

        Route::get('/produk', function () {return view('admin.produk.index');})->name('produk');

        Route::resource('Produk', ProdukController::class);
        Route::get('/Produk', [ProdukController::class, 'index'])->name('Produk-index');
        Route::post('/Produk/store', [ProdukController::class, 'store'])->name('produk-store');
        Route::get('/Produks/{id}/edit', [ProdukController::class, 'edit'])->name('edit-produk');
        Route::put('/Produks/{id}/update', [ProdukController::class, 'update'])->name('produk-update'); // Using POST with _method trick for form-data
        Route::delete('/Produks/{id}', [ProdukController::class, 'destroy'])->name('produk-destroy');
        Route::get('/reload-content-Produk', [ProdukController::class, 'reloadContent'])->name('produk-reload');
        Route::get('/produksi/data', [ProdukController::class, 'getProduksiData']);

        Route::get('/varietas-padi', [varietasPadiController::class, 'index'])->name('varietas-padi');
        Route::get('/varietas-padi/tambah-varietas', [varietasPadiController::class, 'tambahView'])->name('tambah-varietas');
        Route::post('/varietasPadi', [VarietasPadiController::class, 'store'])->name('varietasPadi.store');
        Route::delete('/hapusvarietas/{varietasPadi}', [VarietasPadiController::class, 'destroy'])->name('varietasPadi-destroy');
        Route::get('/latest-data', [VarietasPadiController::class, 'latestData']);
        Route::get('/varietasPadi/{id}/edit', [VarietasPadiController::class, 'edit'])->name('edit-varietas');
        Route::put('/varietasPadi/{id}/update', [VarietasPadiController::class, 'update'])->name('update-varietas');
        Route::get('/reloadcontentvarietas', [VarietasPadiController::class, 'reloadContent'])->name('reload-content-varietas');

        Route::get('/fase', [faseController::class, 'index'])->name('fase');
        Route::get('/get-fase', [faseController::class, 'getfase'])->name('getfase');
        Route::get('/fase/perlakuan', [faseController::class, 'tambahView'])->name('perlakuan');
        Route::get('/fase/perlakuan/{id}', [faseController::class, 'indexPerlakuan']); 
        Route::get('/fase/perlakuan/{id}/show', [faseController::class, 'showPerlakuan']); 
        Route::post('/fase/perlakuan/{id}/store', [faseController::class, 'storePerlakuan']); 
        Route::put('/fase/perlakuan/{id}/update', [faseController::class, 'updatePerlakuan']); 
        Route::delete('/fase/perlakuan/{id}/delete', [faseController::class, 'destroyPerlakuan']); 
        Route::get('/fases/{id}', [faseController::class, 'show']);
        Route::post('/fase/store', [faseController::class, 'store'])->name('fase-store');
        Route::get('/fase/{id}/edit', [faseController::class, 'edit'])->name('edit-fase');
        Route::delete('/fase/{id}/delete', [faseController::class, 'destroy'])->name('hapus-fase');
        Route::patch('/update/{id}', [faseController::class, 'update'])->name('update-fase');

        Route::get('/perlakuan', [perlakuanController::class, 'index']);
        Route::get('/perlakuan/{id}', [perlakuanController::class, 'show']);
        Route::post('/perlakuan', [perlakuanController::class, 'store']);
        Route::put('/perlakuan/{id}', [perlakuanController::class, 'update']);
        Route::delete('/perlakuan/{id}', [perlakuanController::class, 'destroy']);

        Route::resource('gudang', GudangController::class);
        Route::get('/gudang', [gudangController::class, 'index'])->name('gudang');
        Route::get('/getgudang', [gudangController::class, 'getgudangs'])->name('get-gudang');
        Route::post('/tambahgudang', [gudangController::class, 'store'])->name('gudang-store');
        Route::delete('/gudang/{id}/delete', [gudangController::class, 'destroy'])->name('gudang-delete');
        Route::put('/gudang/{id}', [gudangController::class, 'update'])->name('gudang-update');
        Route::get('/gudang/{id}/edit', [gudangController::class, 'edit'])->name('gudang-edit');
        Route::get('/gudang/{id}/view', [gudangController::class, 'show']);

        Route::get('/lahan', function () {return view('admin.lahan.index'); })->name('lahan');
        Route::get('/getlahan', [lahanController::class, 'getlahans'])->name('get-lahan');
        Route::post('/tambahlahan', [lahanController::class, 'store'])->name('lahan-store');
        Route::delete('/lahan/{id}/delete', [lahanController::class, 'destroy'])->name('lahan-delete');
        Route::put('/lahan/{id}', [LahanController::class, 'update'])->name('lahan-update');
        Route::get('/lahan/{id}/edit', [LahanController::class, 'edit'])->name('lahan-edit');
        Route::get('/lahan/{id}/view', [LahanController::class, 'show']);

        Route::get('/settings', [settingsController::class, 'index'])->name('settings');
        Route::put('/settings/update-password/{id}', [SettingsController::class, 'updatePassword'])->name('user-update-password');

        Route::resource('varietasPadis', VarietasPadiController::class);

        // hasil panen
        Route::get('/hasil-panen', [HasilPanenController::class, 'index'])->name('hasil-panen');
        // Route::post('/hasil-panen', [HasilPanenController::class, 'store'])->name('hasil-panen.store');
        // Route::put('/hasil-panen/{id}', [HasilPanenController::class, 'update'])->name('hasil-panen.update');
        // Route::delete('/hasil-panen/{id}', [HasilPanenController::class, 'destroy'])->name('hasil-panen.destroy');

        // pengolahan
        Route::get('/pengolahan', [AdminPengolahanController::class, 'index'])->name('pengolahan');
        Route::get('/pengolahan-fetch', [AdminPengolahanController::class, 'fetchPengolahan'])->name('pengolahan-fetch');
        Route::get('/fetch-unpengolahan', [AdminPengolahanController::class, 'fetchUnPengolahan'])->name('unpengolahan-fetch');
        Route::post('pengolahan/store', [AdminPengolahanController::class, 'store'])->name('pengolahan-store');
        Route::delete('/pengolahan/{id}/delete', [AdminPengolahanController::class, 'destroy'])->name('pengolahan-destroy');
        Route::get('/pengolahan/{id}/edit', [AdminPengolahanController::class, 'edit'])->name('pengolahan-edit');
        Route::put('/pengolahan/{id}/update', [AdminPengolahanController::class, 'update'])->name('pengolahan-update');

        //pengujian
        Route::get('/pengujian', [pengujianController::class, 'index'])->name('pengujian');
        Route::get('/pengujian/tambah-pengujian', [pengujianController::class, 'tambahView'])->name('tambah-pengujian');
        Route::get('/fetch-pengolahan', [pengujianController::class, 'getProduksiWithoutPengujian'])->name('fetch-pengolahan');
        Route::get('/fetch-pengujian', [pengujianController::class, 'fetchPengujian'])->name('pengujian-fetch');
        Route::post('/pengujian/store', [pengujianController::class, 'store'])->name('pengujian-store');
        Route::delete('/pengujian/{id}/delete', [pengujianController::class, 'destroy'])->name('pengujian-destroy');

        // pengemasan
        Route::get('/pengemasan', [PengemasanController::class, 'index'])->name('pengemasan');
        Route::get('/fetch-pengemasan', [PengemasanController::class, 'fetchPengemasan'])->name('pengemasan-fetch');
        Route::get('/fetch-un-pengemasan', [PengemasanController::class, 'fetchUnPengemasan'])->name('un-pengemasan-fetch');
        Route::post('/pengemasan/store', [PengemasanController::class, 'store'])->name('pengemasan-store');
        Route::delete('/pengemasan/{id}/delete', [PengemasanController::class, 'destroy'])->name('pengemasan-destroy');
});

// landing page
Route::get('/products', [ProductController::class,'index'])->name('products');
Route::get('/products/in', [ProductController::class,'index_id'])->name('products_in');
Route::get('/about-us', function() {return view('landingPage.about');})->name('about');
Route::get('/about_id', function() {return view('landingPage.about_id');})->name('about_id');
Route::get('/blog', function() {return view('landingPage.blog');})->name('blog');
Route::get('/contact', function() {return view('landingPage.contact');})->name('contact');
Route::get('/contact_in', function() {return view('landingPage.contact_in');})->name('contact_in');
Route::get('/feature', function() {return view('landingPage.feature');})->name('feature');
Route::get('/testimonial', function() {return view('landingPage.testimonial');})->name('testimonial');
Route::post('/send-email', [ContactController::class, 'sendEmail'])->name('send-email');
