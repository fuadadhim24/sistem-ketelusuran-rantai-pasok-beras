<?php

namespace App\Http\Controllers;

use App\Models\Pengolahan;
use App\Models\Produksi;
use App\Models\Produk;
use Illuminate\Http\Request;

class pengolahanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)

    {
        $katakunci=$request->get('katakunci');
        // dd($katakunci);
        $jumlahbaris=10;

        if (strlen($katakunci)) {
            $data=Produksi::where('id','like',"%$katakunci%")
            ->orWhere('tanggal_produksi','like',"%$katakunci%")
            // ->orWhere('deleted_at','like',"%$katakunci%")
            ->paginate($jumlahbaris);

        }else{

            $data=Produksi::query()->simplePaginate($jumlahbaris);
            // $data=Produk::with('produksi')->simplePaginate($jumlahbaris);

        }


        return view('pengolahan',compact('data'));
    }
    // public function detail($id){
    //     // $data = Produk::with('produksi')->find($id);
    //     $data = Produksi::find($id);
    //     if (!$data) {
    //         return redirect()->route('pengolahan.index')->withErrors(['message' => 'Produk tidak ditemukan']);
    //     }

    //     return view('hasilpengolahan')->with('data', $data);
    // }


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
        $produksi= Produksi::with('produk','varietasPadi')->find($id);
        if (!$produksi) {
            return redirect()->route('pengolahan.index')->withErrors(['message' => 'Produksi tidak ditemukan']);
        }

        // $varietasPadi= Produksi::with('varietasPadi')->find($id);
        // // return $varietasPadi;
        return view('hasilpengolahan', compact('produksi'));
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
