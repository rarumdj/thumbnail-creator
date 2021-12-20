<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageExplorerController extends Controller
{
    public function index()
    {
        //
        return view('dashboard.image-explorer.index');
    }
}
