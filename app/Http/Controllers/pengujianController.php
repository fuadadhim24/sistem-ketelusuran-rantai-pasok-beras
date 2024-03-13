<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pengujianController extends Controller
{
    function index(){
        return view('admin.klasifikasiMutu.index');
    }
    function tambahView(){
        return view('admin.klasifikasiMutu.tambah');
    }
}
