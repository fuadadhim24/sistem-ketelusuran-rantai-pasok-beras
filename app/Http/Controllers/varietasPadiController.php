<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class varietasPadiController extends Controller
{
    function index() {
        return view('admin.varietasPadi.index');
    }
    function tambahView() {
        return view('admin.varietasPadi.tambah');
    }
}
