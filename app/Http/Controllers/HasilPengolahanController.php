<?php

namespace App\Http\Controllers;

use App\Models\Pengujian;
use App\Models\ProduksiModel;
use Illuminate\Http\Request;

class HasilPengolahanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $id)
    {
        $produksi= ProduksiModel::with('produk','padi','panen','lahan','perawatan','pengujian','pengolahan','pengemasan')->find($id);
        if (!$produksi) {
            return redirect()->route('pengolahan.index')->withErrors(['message' => 'Produksi tidak ditemukan']);
        }
        // die($produksi);

        // $result = Builder::create()
        //     ->writer(new PngWriter())
        //     ->data($produksi->id)
        //     ->build();

        // $qrCode = base64_encode($result->getString());

        // $varietasPadi= Produksi::with('varietasPadi')->find($id);
        // return $varietasPadi;
        // dd($produksi->toArray());
        return view('hasilpengolahan', compact('produksi'));
    }
    public function indexEn(string $id)
    {
        $produksi= ProduksiModel::with('produk','padi','panen','lahan','perawatan','pengujian','pengolahan','pengemasan')->find($id);
        if (!$produksi) {
            return redirect()->route('pengolahan.index')->withErrors(['message' => 'Produksi tidak ditemukan']);
        }
        // dd($produksi->toArray());
        return view('hasilpengolahan_en', compact('produksi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
