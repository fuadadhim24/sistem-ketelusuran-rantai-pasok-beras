<?php

namespace App\Http\Controllers;

use App\Models\GudangModel;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class gudangController extends Controller
{
    function index(){
        // $posts = GudangModel::latest()->paginate(5);
        $gudangRead = GudangModel::latest()->get();
        return view('admin.gudang.index', compact('gudangRead'));
    }

    function store(Request $request){
        //validate form
        $request->validate([
            'nama_gudang'     => 'required',
            'kapasitas'   => 'required',
            'lokasi'   => 'required',
            'luas'   => 'required'
        ]);

        //create post
        GudangModel::create($request->all());
        //redirect to index

        return redirect()->route('gudang')->with('success', 'Data Berhasil Disimpan!');
    }        
}
