<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JabatanController extends Controller
{
    public function index()
    {
        return view('Jabatan/index');
    }

    public function create()
    {
        return view('Jabatan/create');
    }

    public function edit()
    {
        return view('Jabatan/edit');
    }
}
