<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class gudangController extends Controller
{
    function index(){
        return view('admin.gudang.index');
    }
}
