<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GajiController extends Controller
{
    public function index() {
        return view('Gaji/index');
    }

    public function create()
    {
        return view('Gaji/create');
    }
    
    public function edit()
    {
        return view('Gaji/edit');
    }

}
