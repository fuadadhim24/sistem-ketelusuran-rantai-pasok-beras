<?php

namespace App\Http\Controllers;

use App\Models\VarietasPadi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VarietasPadiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $padi=VarietasPadi::all();
        $padi=DB::table('padi')->get();
        // $padi = VarietasPadi::with('padi')->get();
        // return $varietas;
        return view("admin/varietasPadi/index",compact("padi"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(VarietasPadi $varietasPadi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(VarietasPadi $varietasPadi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, VarietasPadi $varietasPadi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(VarietasPadi $varietasPadi)
    {
        //
    }
}
