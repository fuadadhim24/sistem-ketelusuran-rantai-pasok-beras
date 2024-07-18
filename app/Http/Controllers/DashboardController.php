<?php

namespace App\Http\Controllers;

use App\Models\GudangModel;
use App\Models\LahanModel;
use App\Models\PadiModel;
use App\Models\Produk;
use App\Models\ProduksiModel;
use App\Models\AdminPengolahanModel;
use App\Models\PengemasanModel;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function index(){
        $data = new \stdClass();
        
        $data->padi = PadiModel::count();
        $data->produk = Produk::count();
        $data->lahan = LahanModel::count();
        $data->gudang = GudangModel::count();
        $data->hasilPanen = ProduksiModel::with(['padi', 'lahan', 'panen', 'perawatan'])->latest()->count();
        $data->pengolahan = AdminPengolahanModel::with(['produksi', 'gudang'])->latest()->count();
        $data->pengemasan = PengemasanModel::with(['pengolahan'])->latest()->count();
        $data->pengujian = ProduksiModel::getProduksiHasPengujian()->count();
        return view('admin.dashboard', compact('data'));
    }
}
