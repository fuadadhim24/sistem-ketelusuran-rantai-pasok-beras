<?php

namespace App\Http\Controllers;

use App\Models\LahanModel;
use App\Models\PadiModel;
use App\Models\PanenModel;
use App\Models\PerawatanModel;
use App\Models\ProduksiModel;
use Illuminate\Http\Request;

class HasilPanenController extends Controller
{
    function index(){
        $produksis = ProduksiModel::with(['padi', 'lahan', 'panen', 'perawatan'])->latest()->get();
        // return view('admin.hasilPanen.index', compact('readProduksi','readPadi','readLahan','readPanen','readPerawatan'));
        // @dd($produksis);
        return view('admin.hasilPanen.index', compact('produksis'));
    }
}
