<?php

namespace App\Http\Controllers;

use App\Models\AdminPengolahanModel;
use App\Models\ProduksiModel;
use Illuminate\Http\Request;

class AdminPengolahanController extends Controller
{
    function index(){
        $pengolahan = AdminPengolahanModel::with(['produksi', 'gudang'])->latest()->get();
        $unPengolahan = ProduksiModel::with(['padi', 'lahan', 'panen', 'perawatan'])
                        ->doesntHave('pengolahan')
                        ->latest()
                        ->get();
        // die($unPengolahan);
        return view('admin.pengolahan.index', compact('pengolahan','unPengolahan'));
    }
    
    public function store(Request $request)
    {
        // Lakukan validasi data yang diterima dari form
        $validatedData = $request->validate([
            'id_produksi' => 'required',
            'metode' => 'required|string', 
            'tanggal_pengolahan' => 'required',
            'deskripsi' => 'nullable', 
            'lama' => 'required|string',
            'hasil' => 'required|string',
        ]);

        $pengolahan = new AdminPengolahanModel($validatedData);

        $pengolahan->save();

        $pengolahan = AdminPengolahanModel::all();

        return response()->json(['pengolahan' => $pengolahan]);
    }

    public function reloadContent(Request $request)
    {
        // Ambil data terbaru dari model VarietasPadi
        $pengolahan = AdminPengolahanModel::all();

        // Kembalikan data dalam bentuk JSON
        return response()->json(['pengolahan' => $pengolahan]);
    }
}
