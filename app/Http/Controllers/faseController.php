<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fase;
use App\Models\PerlakuanModel;

class faseController extends Controller
{
    public function index()
    {
        $fase = Fase::all();
        return view('admin.fase.index', ['fase' => $fase]);
    }

    public function getfase()
    {
        $fases = Fase::all();
        return response()->json($fases);
    }

    public function indexPerlakuan()
    {
        return view('admin.fase.perlakuan.index');
        // return response()->json($perlakuan);
    }
    public function showPerlakuan($id)
    {
        $perlakuan = PerlakuanModel::where('id_fase', $id)->with('fase')->get();
        // return view('admin.fase.perlakuan.index');
        return response()->json($perlakuan);
    }
    public function storePerlakuan(Request $request)
    {
        $perlakuan = new PerlakuanModel();
        $perlakuan->nama_perlakuan_utama = $request->input('nama_perlakuan_utama');
        $perlakuan->durasi = $request->input('durasi');
        $perlakuan->hari = $request->input('hari');
        $perlakuan->id_fase = $request->input('id_fase');
        $perlakuan->save();
        return response()->json('Perlakuan berhasil ditambahkan');
    }
    public function updatePerlakuan(Request $request, $id)
    {
        $perlakuan = PerlakuanModel::find($id);
        $perlakuan->nama_perlakuan_utama = $request->input('nama_perlakuan_utama');
        $perlakuan->durasi = $request->input('durasi');
        $perlakuan->hari = $request->input('hari');
        $perlakuan->id_fase = $request->input('id_fase');
        $perlakuan->save();
        return response()->json('Perlakuan berhasil diperbarui');
    }
    public function destroyPerlakuan($id)
    {
        $perlakuan = PerlakuanModel::find($id);
        $perlakuan->delete();
        return response()->json('Perlakuan berhasil dihapus');
    }

    public function show($id)
    {
        $fase = Fase::find($id);
        return response()->json($fase);
    }

    public function store(Request $request)
    {
        $fase = new Fase();
        $fase->nama_fase = $request->input('nama_fase');
        $fase->durasi = $request->input('durasi');
        $fase->save();
        return response()->json('Fase created successfully');
    }

    
    public function update(Request $request, $id)
    {
        $fase = Fase::find($id);
        $fase->nama_fase = $request->input('nama_fase');
        $fase->durasi = $request->input('durasi');
        $fase->save();
        return response()->json('Fase updated successfully');
    }

    public function destroy($id)
    {
        $fase = Fase::find($id);
        $fase->delete();
        return response()->json('Fase deleted successfully');
    }

    public function edit($id)
    {
        $fase = Fase::find($id);
        return response()->json($fase);
    }
}
