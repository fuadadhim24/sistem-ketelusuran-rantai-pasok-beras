<?php

namespace App\Http\Controllers;

use App\Models\GudangModel;
use Illuminate\Http\Request;

class GudangController extends Controller
{
    public function index()
    {
        return view('admin.gudang.index');
    }

    public function getgudangs()
    {
        $gudang = GudangModel::all();
        return response()->json($gudang);  // Return data directly as JSON
    }

    public function store(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'nama_gudang' => 'required|string|max:255',
            'kapasitas' => 'required|numeric',
            'luas' => 'required|string|max:255',
            'lokasi' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        try {
            GudangModel::create($request->all());
            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function edit($id)
    {
        $gudang = GudangModel::findOrFail($id);
        return response()->json(['data' => $gudang]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_gudang' => 'required|string|max:255',
            'kapasitas' => 'required|numeric',
            'luas' => 'required|string',
            'lokasi' => 'required|string',
            'status' => 'required|string',
            'latitude' => 'required|string',
            'longitude' => 'required|string',
        ]);

        $gudang = GudangModel::findOrFail($id);
        $gudang->update($request->all());

        return response()->json(['message' => 'Gudang updated successfully']);
    }
    public function destroy($id)
    {
        $gudang = GudangModel::find($id);

        if (!$gudang) {
            return response()->json(['message' => 'Gudang not found'], 404);
        }

        $gudang->delete();

        return response()->json(['message' => 'Gudang deleted successfully'], 200);
    }

    public function show($id)
    {
        $gudang = GudangModel::find($id);

        if (!$gudang) {
            return response()->json(['message' => 'Gudang not found'], 404);
        }

        return response()->json(['gudang' => $gudang], 200);
    }
}

