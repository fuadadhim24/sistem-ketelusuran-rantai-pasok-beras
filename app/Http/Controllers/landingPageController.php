<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class landingPageController extends Controller
{
    public function index(){
        return view('landingPage.index');
    }

    public function show(){
        $landingPage = Produk::latest()->get();
        return response()->json($landingPage);
    }
}
