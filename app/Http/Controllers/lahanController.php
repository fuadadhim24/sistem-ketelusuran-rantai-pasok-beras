<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class lahanController extends Controller
{
    function index(){
        return view('admin.lahan.index');
    }
}
