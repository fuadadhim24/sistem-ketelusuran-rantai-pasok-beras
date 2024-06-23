<?php

namespace App\Http\Controllers;
use App\Models\Lahan;
use Illuminate\Http\Request;

class lahanController extends Controller
{
    function index(){
        return view('admin.lahan.index');
    }
    public function getLahans()
    {
        $lahans = Lahan::all();
        return response()->json(['lahans' => $lahans]);
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
    public function edit($id)
{
    $lahan = Lahan::find($id);
    return response()->json(['lahan' => $lahan]);
}


    public function update(Request $request, $id)
{
    $lahan = Lahan::find($id);
    $lahan->nama_lahan = $request->nama_lahan;
    $lahan->detail_lokasi = $request->detail_lokasi;
    $lahan->luas = $request->luas;
    $lahan->latitude = $request->latitude;
    $lahan->longitude = $request->longitude;
    $lahan->jenis_tanah = $request->jenis_tanah;
    $lahan->save();

    return response()->json($lahan);
}

    public function destroy($id)
    {
        // Temukan data berdasarkan ID dan hapus
        $lahan = Lahan::findOrFail($id);
        $lahan->delete();

        return response()->json(['success' => 'Data berhasil dihapus']);
    }
    public function show($id)
{
    $lahan = Lahan::find($id);

    if (!$lahan) {
        return response()->json(['message' => 'Lahan not found'], 404);
    }

    return response()->json(['lahan' => $lahan], 200);
}

}
