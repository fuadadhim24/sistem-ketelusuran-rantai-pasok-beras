<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class landingPageController extends Controller
{
    public function index(){
        $produkPremium = Produk::byCategory('premium')->get();
        $produkMedium = Produk::byCategory('medium')->get();
        // dd(compact('produkPremium','produkMedium'));

        return view('landingPage.index', compact('produkPremium','produkMedium'));
        // return view('landingPage.index');
    }
    public function index_in(){
        $produkPremium = Produk::byCategory('premium')->get();
        $produkMedium = Produk::byCategory('medium')->get();
        // dd(compact('produkPremium','produkMedium'));

        return view('landingPage.index_id', compact('produkPremium','produkMedium'));
        // return view('landingPage.index');
    }

    public function show()
    {
        $produkPremium = Produk::byCategory('premium')->get();
        $produkMedium = Produk::byCategory('medium')->get();

        return view('landingPage.index', compact('produkPremium','produkMedium'));

        // return response()->json([
        //     'produkPremium' => $produkPremium,
        //     'produkMedium' => $produkMedium,
        // ]);
    }
}
