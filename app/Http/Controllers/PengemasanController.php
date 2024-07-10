<?php

namespace App\Http\Controllers;

use App\Models\AdminPengolahanModel;
use App\Models\PengemasanModel;
use Illuminate\Http\Request;

class PengemasanController extends Controller
{
    function index(){
        $pengemasans = PengemasanModel::with(['pengolahan'])->latest()->get();
        // die($pengemasans);
        // return view('admin.pengolahan.index', compact('pengolahan'));
        return view('admin.pengemasan.index', compact('pengemasans'));
    }

    public function store(Request $request ){
        $validateData = $request->validate([
            'id_pengolahan' => 'required',
            'id_produksi' => 'required',
            'tanggal_pengemasan' => 'required',
            'jenis_kemasan' => 'required',
            'berat_kemasan' => 'required',
            'jumlah_kemasan' => 'required',
        ]);
        // return response('Bisa');
        $tanggalPengemasan = $validateData['tanggal_pengemasan'];
        $qrCode = 'http://127.0.0.1:8000/hasil-pengolahan-in/'.$validateData['id_produksi'];

        $pengemasan = new PengemasanModel();
        $pengemasan->id_pengolahan = $validateData['id_pengolahan'];
        $pengemasan->created_at = $tanggalPengemasan;
        $pengemasan->jenis_kemasan = $validateData['jenis_kemasan'];
        $pengemasan->berat_kemasan = $validateData['berat_kemasan'];
        $pengemasan->jumlah_kemasan = $validateData['jumlah_kemasan'];
        $pengemasan->qr_code = $qrCode;
        $pengemasan->save();

        $pengemasan = PengemasanModel::latest()->get();
        return response()->json($pengemasan);
    }

    public function fetchPengemasan(){
        $pengemasan = PengemasanModel::latest()->get();
        return response()->json($pengemasan);
    }
    public function fetchUnPengemasan(){
        $pengemasan = AdminPengolahanModel::pengolahanWithoutPengemasan();
        return response()->json($pengemasan);
    }

    public function destroy($id){
        $pengemasan = PengemasanModel::findOrFail($id);
        $pengemasan->delete();

        return response()->json($pengemasan);
    }


}
