<?php

namespace App\Http\Controllers;

use App\Models\AdminPengolahanModel;
use Illuminate\Http\Request;

class AdminPengolahanController extends Controller
{
    function index(){
        $pengolahan = AdminPengolahanModel::with(['produksi', 'gudang'])->latest()->get();
        // die($pengolahan);
        return view('admin.pengolahan.index', compact('pengolahan'));
    }
}
