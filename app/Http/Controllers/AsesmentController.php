<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AsesmentController extends Controller
{
    public function index()
    {
        return view('admin.akademik.asesment.index');
    }   
}
