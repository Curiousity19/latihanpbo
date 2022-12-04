<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function index()
    {
        return view('Karyawan/index');
    }

    public function create()
    {
        return view('Karyawan/create');
    }

    public function edit()
    {
        return view('Karyawan/edit');
    }
}
