<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class faseController extends Controller
{
    function index(){
        return view('admin.fase.index');
    }
    function tambahView(){
        return view('admin.fase.perlakuan.index');
    }
    function edit(){
        
    }
    function hapus(){
        
    }
}
