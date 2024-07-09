<?php

namespace App\Http\Controllers;

use App\Models\AdminPengolahanModel;
use App\Models\ProduksiModel;
use Illuminate\Http\Request;

class AdminPengolahanController extends Controller
{
    function index(){
        // $pengolahan = AdminPengolahanModel::with(['produksi', 'gudang'])->latest()->get();
        // $unPengolahan = ProduksiModel::with(['padi', 'lahan', 'panen', 'perawatan'])
        //                 ->doesntHave('pengolahan')
        //                 ->latest()
        //                 ->get();
        // die($unPengolahan);
        // return view('admin.pengolahan.index', compact('pengolahan','unPengolahan'));
        return view('admin.pengolahan.index');
    }
    
    public function fetchPengolahan()
    {
        $pengolahan = AdminPengolahanModel::with(['produksi', 'gudang'])
                        ->latest()
                        ->get();
                        // dd($pengolahan);

        return response()->json($pengolahan);
    }

    public function fetchUnPengolahan()
    {
        $unPengolahan = ProduksiModel::with(['padi', 'lahan', 'panen', 'perawatan'])
                        ->doesntHave('pengolahan')
                        ->latest()
                        ->get();

        return response()->json($unPengolahan);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id_produksi' => 'required',
            'metode' => 'required|string', 
            'tanggal_pengolahan' => 'required',
            'deskripsi' => 'nullable', 
            'lama' => 'required|string',
            'hasil' => 'required|string',
        ]);

        $tanggalPengolahan = $validatedData['tanggal_pengolahan'];
        
        $pengolahan = new AdminPengolahanModel();
        $pengolahan->id_produksi = $validatedData['id_produksi'];
        $pengolahan->metode = $validatedData['metode'];
        $pengolahan->created_at = $tanggalPengolahan; 
        $pengolahan->deskripsi = $validatedData['deskripsi'];
        $pengolahan->lama = $validatedData['lama'];
        $pengolahan->hasil = $validatedData['hasil'];
        $pengolahan->save();

        $latestPengolahan = AdminPengolahanModel::with(['produksi', 'gudang'])
                            ->latest()
                            ->get();

        return response()->json(['pengolahan' => $latestPengolahan]);
    }

    public function destroy($id)
    {
        $pengolahan = AdminPengolahanModel::findOrFail($id);

        $pengolahan->delete();

        return response()->json(['message' => 'Data berhasil dihapus']);
    }
    public function edit($id)
    {
        $pengolahan = AdminPengolahanModel::findOrFail($id);
        return response()->json($pengolahan);
    }

    public function update(Request $request, $id)
    {
        $pengolahan = AdminPengolahanModel::findOrFail($id);
        
        $validatedData = $request->validate([
            'metode' => 'required|string',
            'deskripsi' => 'nullable|string',
        ]);

        $pengolahan->update($validatedData);

        return response()->json(['message' => 'Data berhasil diperbarui']);
    }
}
