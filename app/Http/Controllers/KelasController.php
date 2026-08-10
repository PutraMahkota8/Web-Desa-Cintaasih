<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function pkbm()
    {
        return view('admin.akademik.kelas.pkbm');
    }

    public function mas()
    {
        return view('admin.akademik.kelas.mas');
    }
}
