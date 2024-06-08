<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Fase;
class faseController extends Controller
{
    public function index()
    {
        $fase = Fase::all();
        return view('admin.fase.index', ['fase' => $fase]);
    }
    function tambahView(){
        return view('admin.fase.perlakuan.index');
    }
    public function store(Request $request)
    {
        $request->validate([
            'nama_fase' => 'required',
            'durasi' => 'required',
        ]);
        Fase::create([
            'nama_fase' => $request->nama_fase,
            'durasi' => $request->durasi,
        ]);
        return response()->json(['success' => 'Post created successfully.']);
    }
    public function edit($id)
    {
        $fase = Fase::findOrFail($id);
        return view('edit-fase', compact('fase'));
    }
    public function update(Request $request, $id)
{
    $fase = Fase::findOrFail($id);
    $fase->nama_fase = $request->nama_fase;
    $fase->durasi = $request->durasi;
    $fase->save();

    return redirect()->route('fase')->with('success', 'Fase berhasil diperbarui');
}
public function destroy($id)
{
    // Coba hapus fase dari database berdasarkan ID
    try {
        Fase::findOrFail($id)->delete();
        return response()->json(['success' => true]);
    } catch (\Exception $e) {
        // Tangkap kesalahan dan kirimkan respons bahwa penghapusan gagal
        return response()->json(['success' => false]);
    }
}


}
