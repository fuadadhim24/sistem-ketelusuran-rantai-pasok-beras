<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Produksi; // Ensure you have this model

class ProdukController extends Controller
{
    public function index()
    {
        $Produks = Produk::all();
        $Produks = Produk::all();
        return response()->json(['Produk' => $Produks]);
    }

    public function create()
    {
        $Produksis = Produksi::all(); // Fetch all produksi data
        return view('produk.create', compact('Produksis')); // Ensure you pass the data to the view
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_produk' => 'required|string|max:255',
            'jumlah_unit' => 'required|integer',
            'foto' => 'required|image|max:2048',
            'harga' => 'required|integer',
            'deskripsi' => 'required|string',
            'kode_produksi' => 'required|string|max:255',
        ]);

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
            'kode_produksi' => $validated['kode_produksi'],
        ]);

        return response()->json(['Produk' => $Produk]);
    }

    public function edit($id)
    {
        $Produk = Produk::findOrFail($id);
        $Produksis = Produksi::all(); // Fetch all produksi data
        return response()->json(['Produk' => $Produk, 'Produksis' => $Produksis]); // Pass both Produk and Produksi data
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama_produk' => 'required|string|max:255',
            'jumlah_unit' => 'required|integer',
            'foto' => 'sometimes|image|max:2048',
            'harga' => 'required|integer',
            'deskripsi' => 'required|string',
            'kode_produksi' => 'required|string|max:255',
        ]);

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
    }

    public function destroy($id)
    {
        $Produk = Produk::findOrFail($id);
        if (File::exists(public_path($Produk->foto))) {
            File::delete(public_path($Produk->foto));
        }
        $Produk->delete();

        return response()->json(['message' => 'Produk deleted successfully']);
    }
}
