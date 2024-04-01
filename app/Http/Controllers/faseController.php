<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Fase;
use Illuminate\View\View;
use Illuminate\Http\JsonResponse;
class faseController extends Controller
{
    function index(){
        return view('admin.fase.index');
    }
    function tambahView(){
        return view('admin.fase.perlakuan.index');
    }

    public function store(Request $request)
    {
        // Validasi request
        $request->validate([
            'nama_fase' => 'required',
            'durasi' => 'required',
        ]);

        Fase::create([
            'nama_fase' => $request->nama_fase,
            'durasi' => $request->durasi,
        ]);

        return response()->json(['success' => 'Post created successfully.']);
    }


    // Metode lainnya seperti edit dan hapus dapat ditambahkan sesuai kebutuhan

    function edit(){

    }
    function hapus(){

    }
}
