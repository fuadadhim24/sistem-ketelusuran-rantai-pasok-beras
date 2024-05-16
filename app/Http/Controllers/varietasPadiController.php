<?php

namespace App\Http\Controllers;

use App\Models\VarietasPadi;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use Illuminate\Support\Facades\DB;


class VarietasPadiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $padi = VarietasPadi::all();
    return view("admin/varietasPadi/index", compact("padi"));
}
public function latestData()
    {
        // Ambil data terbaru dari model Varietas
        $latestData = VarietasPadi::latest()->get();

        // Kembalikan data dalam format JSON
        return response()->json($latestData);
    }

    public function edit($id)
    {
        $varietas = VarietasPadi::findOrFail($id);
        return view('edit-varietas', compact('varietas'));
    }
    public function show($id)
{
    $item = VarietasPadi::findOrFail($id);
    return view('update-varietas', compact('item'));
}
    public function update(Request $request, $id)
    {
        $varietas = VarietasPadi::findOrFail($id);

        $request->validate([
            'varietas' => 'required|string',
            'deskripsi' => 'nullable|string',
            'keunggulan' => 'nullable|string',
            'jenis_musim' => 'required|string',
            'ketahanan_hama_penyakit' => 'required|string',
            'lama_tanam' => 'required|integer',
        ]);

        $varietas->update([
            'varietas' => $request->varietas,
            'deskripsi' => $request->deskripsi,
            'keunggulan' => $request->keunggulan,
            'jenis_musim' => $request->jenis_musim,
            'ketahanan_hama_penyakit' => $request->ketahanan_hama_penyakit,
            'lama_tanam' => $request->lama_tanam,
        ]);

        return response()->json(['success' => true, 'message' => 'Varietas Padi berhasil diupdate.']);
    }


    public function store(Request $request)
    {
        // Lakukan validasi data yang diterima dari form
        $validatedData = $request->validate([
            'varietas' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'keunggulan' => 'required|string|max:255',
            'jenis_musim' => 'required|string|max:255',
            'lama_tanam' => 'required|integer',
            'ketahanan_hama_penyakit' => 'required|string|max:255',
        ]);

        // Buat objek VarietasPadi baru
        $varietasPadi = new VarietasPadi($validatedData);

        // Simpan objek ke dalam database
        $varietasPadi->save();

        // Ambil data varietas padi yang terbaru setelah penyimpanan
        $padi = VarietasPadi::all();

        // Kembalikan data varietas padi yang terbaru dalam bentuk JSON
        return response()->json(['padi' => $padi]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(VarietasPadi $varietasPadi)
    {
        // Hapus data dari database
        $varietasPadi->delete();

        // Beri respon
        return response()->json(['success' => true, 'message' => 'Varietas Padi berhasil dihapus']);
    }
    public function reloadContent(Request $request)
    {
        // Ambil data terbaru dari model VarietasPadi
        $padi = VarietasPadi::all();

        // Kembalikan data dalam bentuk JSON
        return response()->json(['padi' => $padi]);
    }
}
