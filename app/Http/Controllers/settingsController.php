<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class settingsController extends Controller
{
    function index(){
        return view('admin.settings.index');
    }

}
