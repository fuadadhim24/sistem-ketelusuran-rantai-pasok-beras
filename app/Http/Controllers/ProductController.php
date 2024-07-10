<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $produkPremium = Produk::byCategory('premium')->get();
        $produkMedium = Produk::byCategory('medium')->get();
        // dd(compact('produkPremium','produkMedium'));

        return view('landingPage.product', compact('produkPremium','produkMedium'));
    }
}
