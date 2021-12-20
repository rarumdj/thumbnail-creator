<?php

namespace App\Http\Controllers;

use App\Models\Template;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CopywriterController extends Controller
{
    public function index()
    {
        //
        $myTemplates = Template::where('template_owner', Auth::user()->id)->get();
        return view('dashboard.copywriter.index')->with('templates', $myTemplates);
    }

    public function copyCreator()
    {
        //
        return view('dashboard.copywriter.creator');
    }
}
