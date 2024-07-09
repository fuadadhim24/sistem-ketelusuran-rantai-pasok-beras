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
            $Produks = Produk::all();
            return response()->json(['Produk' => $Produks]);
        } catch (\Exception $e) {
            Log::error("Error fetching products: " . $e->getMessage());
            return response()->json(['error' => 'Internal Server Error'], 500);
        }
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_produk' => 'required|string|max:255',
            'jumlah_unit' => 'required|integer',
            'foto' => 'required|image|max:2048',
            'harga' => 'required|integer',
            'deskripsi' => 'required|string',
        ]);

        try {
            $file = $request->file('foto');
            $path = 'assets/img/produk';
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path($path), $filename);

            $Produk = Produk::create([
                'nama_produk' => $validated['nama_produk'],
                'jumlah_unit' => $validated['jumlah_unit'],
                'foto' => $path . '/' . $filename,
                'harga' => $validated['harga'],
                'deskripsi' => $validated['deskripsi'],
            ]);

            return response()->json(['Produk' => $Produk]);
        } catch (\Exception $e) {
            Log::error("Error storing product: " . $e->getMessage());
            return response()->json(['error' => 'Internal Server Error'], 500);
        }
    }
    public function edit($id)
    {
        try {
            $Produk = Produk::findOrFail($id);
            return response()->json(['Produk' => $Produk]);
        } catch (\Exception $e) {
            Log::error("Error fetching product: " . $e->getMessage());
            return response()->json(['error' => 'Internal Server Error'], 500);
        }
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama_produk' => 'required|string|max:255',
            'jumlah_unit' => 'required|integer',
            'foto' => 'sometimes|image|max:2048',
            'harga' => 'required|integer',
            'deskripsi' => 'required|string',
        ]);

        try {
            $Produk = Produk::findOrFail($id);

            if ($request->hasFile('foto')) {
                if (File::exists(public_path($Produk->foto))) {
                    File::delete(public_path($Produk->foto));
                }

                $file = $request->file('foto');
                $path = 'assets/img/produk';
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path($path), $filename);
                $Produk->foto = $path . '/' . $filename;
            }

            $Produk->update($validated);

            return response()->json(['Produk' => $Produk]);
        } catch (\Exception $e) {
            Log::error("Error updating product: " . $e->getMessage());
            return response()->json(['error' => 'Internal Server Error'], 500);
        }
    }

    public function destroy($id)
    {
        try {
            $Produk = Produk::findOrFail($id);
            if (File::exists(public_path($Produk->foto))) {
                File::delete(public_path($Produk->foto));
            }
            $Produk->delete();

            return response()->json(['message' => 'Produk deleted successfully']);
        } catch (\Exception $e) {
            Log::error("Error deleting product: " . $e->getMessage());
            return response()->json(['error' => 'Internal Server Error'], 500);
        }
    }
}
