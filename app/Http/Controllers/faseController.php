<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Fase;
use Illuminate\View\View;
use Illuminate\Http\JsonResponse;
class faseController extends Controller
{
    public function index()
    {
        // Mengambil semua data fase dari model Fase
        $fasesku = Fase::all();

        // Meneruskan data ke tampilan 'admin.fase.index'
        return view('admin.fase.index', ['fasesku' => $fasesku]);
    }
    function tambahView(){
        return view('admin.fase.perlakuan.index');
    }

    public function store(Request $request)
    {
        // Validasi request
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


    // Metode lainnya seperti edit dan hapus dapat ditambahkan sesuai kebutuhan

    function edit(){

    }
    function hapus(){

    }
    public function destroy($id)
    {
        $fase = Fase::findOrFail($id);
        $fase->delete();
        return redirect()->route('index-fase')->with('success', 'Fase berhasil dihapus.');
    }
}
