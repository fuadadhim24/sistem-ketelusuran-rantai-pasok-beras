<?php

namespace App\Http\Controllers;
use App\Models\Lahan;
use Illuminate\Http\Request;

class lahanController extends Controller
{
    function index(){
        return view('admin.lahan.index');
    }
    public function store(Request $request)
    {
        // Validasi request
        $request->validate([
            'nama_lahan' => 'required',
            'detail_lokasi' => 'required',
            'luas' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'jenis_tanah' => 'required',
        ]);

        // Buat data baru
        Lahan::create($request->all());

        return response()->json(['success' => 'Data berhasil disimpan']);
    }

    public function update(Request $request, $id)
    {
        // Validasi request
        $request->validate([
            'nama_lahan' => 'required',
            'detail_lokasi' => 'required',
            'luas' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'jenis_tanah' => 'required',
        ]);

        // Temukan data berdasarkan ID dan perbarui
        $lahan = Lahan::findOrFail($id);
        $lahan->update($request->all());

        return response()->json(['success' => 'Data berhasil diperbarui']);
    }

    public function destroy($id)
    {
        // Temukan data berdasarkan ID dan hapus
        $lahan = Lahan::findOrFail($id);
        $lahan->delete();

        return response()->json(['success' => 'Data berhasil dihapus']);
    }
}
