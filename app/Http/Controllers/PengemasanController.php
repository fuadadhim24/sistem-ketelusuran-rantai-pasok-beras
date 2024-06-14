<?php

namespace App\Http\Controllers;

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
}
