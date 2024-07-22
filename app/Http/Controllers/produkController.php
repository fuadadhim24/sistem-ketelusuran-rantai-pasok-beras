<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;

class ProdukController extends Controller
{
    public function index()
    {
        try {
            $produks = Produk::all();
            return response()->json(['Produk' => $produks]);
        } catch (\Exception $e) {
            Log::error("Error fetching products: " . $e->getMessage());
            return response()->json(['error' => 'Internal Server Error'], 500);
        }
    }

    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'nama_produk' => 'required|string|max:255',
                'jumlah_unit' => 'required|integer',
                'foto' => 'required|image|max:2048', // ensure it's an image and maximum 2MB
                'harga' => 'required|integer',
                'deskripsi' => 'required|string',
            ]);

            $file = $request->file('foto');
            $path = 'assets/img/produk/';
            $filename = $file->getClientOriginalName();
            $file->move(public_path($path), $filename);

            $produk = Produk::create([  
                'nama_produk' => $validated['nama_produk'],
                'jumlah_unit' => $validated['jumlah_unit'],
                'foto' => $filename,
                'harga' => $validated['harga'],
                'deskripsi' => $validated['deskripsi'],
            ]);

            return response()->json(['Produk' => $produk]);
        } catch (\Exception $e) {
            Log::error("Error storing product: " . $e->getMessage());
            return response()->json(['error' => 'Internal Server Error'], 500);
        }
    }


    public function edit($id)
    {
        try {
            $produk = Produk::findOrFail($id);
            return response()->json(['Produk' => $produk]);
        } catch (\Exception $e) {
            Log::error("Error fetching product: " . $e->getMessage());
            return response()->json(['error' => 'Internal Server Error'], 500);
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $validated = $request->validate([
                'nama_produk' => 'required|string|max:255',
                'jumlah_unit' => 'required|integer',
                'foto' => 'sometimes|image|max:2048',
                'harga' => 'required|integer',
                'deskripsi' => 'required|string',
            ]);

            $produk = Produk::findOrFail($id);

            if ($request->hasFile('foto')) {
                // Delete old foto if exists
                $this->deleteFoto($produk);

                // Upload new foto
                $file = $request->file('foto');
                $path = 'assets/img/produk';
                $filename = $file->getClientOriginalName();
                $file->move(public_path($path), $filename);
                $produk->foto = $filename;
            }

            // Update other fields
            $produk->nama_produk = $validated['nama_produk'];
            $produk->jumlah_unit = $validated['jumlah_unit'];
            $produk->harga = $validated['harga'];
            $produk->deskripsi = $validated['deskripsi'];

            $produk->save();

            return response()->json(['Produk' => $produk]);
        } catch (\Exception $e) {
            Log::error("Error updating product: " . $e->getMessage());
            return response()->json(['error' => 'Internal Server Error'], 500);
        }
    }

    public function destroy($id)
    {
        try {
            $produk = Produk::findOrFail($id);

            // Delete foto
            $this->deleteFoto($produk);

            // Delete produk
            $produk->delete();

            return response()->json(['message' => 'Produk deleted successfully']);
        } catch (\Exception $e) {
            Log::error("Error deleting product: " . $e->getMessage());
            return response()->json(['error' => 'Internal Server Error'], 500);
        }
    }

    // Helper method to delete foto
    private function deleteFoto($produk)
    {
        if (File::exists(public_path($produk->foto))) {
            File::delete(public_path($produk->foto));
        }
    }
}
