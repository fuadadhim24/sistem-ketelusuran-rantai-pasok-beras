<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PerlakuanModel;

class perlakuanController extends Controller
{
    public function index()
    {
        $perlakuan = PerlakuanModel::all();
        return response()->json($perlakuan);
    }

    public function show($id)
    {
        $perlakuan = PerlakuanModel::find($id);
        return response()->json($perlakuan);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_perlakuan_utama' => 'required|string|max:255',
            'hari' => 'required|integer',
            'durasi' => 'required|integer',
            'id_fase' => 'required|integer',
        ]);

        $perlakuan = PerlakuanModel::create($validated);
        return response()->json($perlakuan);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama_perlakuan_utama' => 'required|string|max:255',
            'hari' => 'required|integer',
            'durasi' => 'required|integer',
        ]);

        $perlakuan = PerlakuanModel::find($id);
        $perlakuan->update($validated);
        return response()->json($perlakuan);
    }

    public function destroy($id)
    {
        $perlakuan = PerlakuanModel::find($id);
        $perlakuan->delete();
        return response()->json(['message' => 'Deleted successfully']);
    }
}
