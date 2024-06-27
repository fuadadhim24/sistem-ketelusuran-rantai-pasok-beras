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

    public function getfase()
    {
        $fases = Fase::all();
        return response()->json($fases);
    }

    public function tambahView()
    {
        return view('admin.fase.perlakuan.index');
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
