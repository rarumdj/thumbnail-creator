<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackgroundRemoverController extends Controller
{
    public function index()
    {
        //
        return view('dashboard.bg-remover.index');
    }
}
