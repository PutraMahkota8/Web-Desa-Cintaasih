<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LembagaController extends Controller
{
    public function mas()
    {
        return view('admin.data_master.lembaga.mas');
    }

    public function pkbm()
    {
        return view('admin.data_master.lembaga.pkbm');
    }

    public function form()
    {
        return view('admin.data_master.lembaga.edit');
    }
}
