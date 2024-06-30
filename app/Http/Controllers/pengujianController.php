<?php

namespace App\Http\Controllers;

use App\Models\Produksi;
use App\Models\Pengujian;
use App\Models\ProduksiModel;
use Illuminate\Http\Request;

class pengujianController extends Controller
{
    function index(){
        return view('admin.klasifikasiMutu.index');
    }
    function tambahView(){
        return view('admin.klasifikasiMutu.tambah');
    }

    function getProduksiWithoutPengujian(){
    $produksiWithoutPengujian = ProduksiModel::getProduksiWithoutPengujian();
        return response()->json($produksiWithoutPengujian);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'derajat_sosoh' => 'required',
            'kadar_air' => 'required|string', 
            'beras_kepala' => 'nullable', 
            'butir_patah' => 'required|string',
            'butir_menir_dsb' => 'required|string',
            'butir_gabah' => 'required|string',
            'butir_lain' => 'required|string',
            'keterangan' => 'required|string',
            'id_produksi' => 'required|string',
        ]);
        $input = array(
            "Derajat Sosoh" => $validatedData['derajat_sosoh'],
            "Kadar Air" => $validatedData['kadar_air'],
            "Beras Kepala" => $validatedData['beras_kepala'],
            "Butir Patah" => $validatedData['butir_patah'],
            "Total Butir Beras Lainnya" => $validatedData['butir_menir_dsb'],
            "Butir Gabah" => $validatedData['butir_gabah'],
            "Benda Lain" => $validatedData['butir_lain']
        );

        $hasilPengujian = $this->countMutuClass($input);
        
        $pengujian = new Pengujian();
        $pengujian->derajat_sosoh = $validatedData['derajat_sosoh'];
        $pengujian->kadar_air = $validatedData['kadar_air'];
        $pengujian->beras_kepala = $validatedData['beras_kepala']; 
        $pengujian->butir_patah = $validatedData['butir_patah'];
        $pengujian->butir_menir_dsb = $validatedData['butir_menir_dsb'];
        $pengujian->butir_lain = $validatedData['butir_lain'];
        $pengujian->butir_gabah = $validatedData['butir_gabah'];
        $pengujian->keterangan = $validatedData['keterangan'];
        $pengujian->id_produksi = $validatedData['id_produksi'];
        $pengujian->hasil_pengujian = $hasilPengujian;
        $pengujian->save();

        return response()->json(['message' => 'Data berhasil disimpan']);
    }

    function fetchPengujian(){
        // $pengujian = Pengujian::all()
        $pengujian = ProduksiModel::getProduksiHasPengujian();
        // ->with('produksi')
        // ->with('pengolahan')
        // ->get();
        // $pengujian = Pengujian::with(['produksi']);
        return response()->json($pengujian);
    }

    function countMutuClass($input){
        $parameterMedium = array(
            "Derajat Sosoh" => 95,
            "Kadar Air" => 14,
            "Beras Kepala" => 75,
            "Butir Patah" => 25,
            "Total Butir Beras Lainnya" => 5,
            "Butir Gabah" => 1,
            "Benda Lain" => 0.05
        );

        $parameterPremium = array(
            "Derajat Sosoh" => 95,
            "Kadar Air" => 14,
            "Beras Kepala" => 85,
            "Butir Patah" => 15,
            "Total Butir Beras Lainnya" => 0,
            "Butir Gabah" => 0,
            "Benda Lain" => 0
        );

        $nilaiKesesuaianMedium = 0;
        $nilaiKesesuaianPremium = 0;

        foreach ($input as $key => $value) {
            if ($value >= $parameterMedium[$key]) {
                $nilaiKesesuaianMedium += 1;
            }

            if ($value >= $parameterPremium[$key]) {
                $nilaiKesesuaianPremium += 1;
            }
        }

        // Tentukan kelas mutu berdasarkan nilai kesesuaian tertinggi
        if ($nilaiKesesuaianMedium >= $nilaiKesesuaianPremium) {
            $kelasMutu = "Medium";
        } else {
            $kelasMutu = "Premium";
        }

        return $kelasMutu;
    }

}
