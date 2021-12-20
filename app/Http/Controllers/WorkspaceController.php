<?php

namespace App\Http\Controllers;

use App\Models\Workspace;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class WorkspaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $workspaces = Auth::user()->workspaces;
        return view('dashboard.workspace.index')->with('workspaces', $workspaces);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        Validator::make($request->all(), [
            'name' => ['required']
        ])->validate();


        $workspaceCreated = Workspace::create([
            'name' => $request->input('name'),
            'user_id' => Auth::user()->id
        ]);

        if ($workspaceCreated) :
            return redirect()->route('dashboard.workspace.index')->with('message', 'Workspace created successfully');
        else :
            return view('dashboard.workspace.index');
        endif;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return view('dashboard.workspace.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $id = $request->input('id');
        $isUpdated = Workspace::find($id)->update(["name" => $request->input('name')]);
        if (!$isUpdated) :
            return view('dashboard.workspace.index');
        endif;

        return redirect()->route('dashboard.workspace.index')->with('message', 'Workspace Edited Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $isDeleted = Workspace::find($id)->delete();
        if (!$isDeleted) :
            return redirect()->route('dashboard.workspace.index')->with('error', 'An unexpected error occurred deleting workspace');
        endif;

        return redirect()->route('dashboard.workspace.index')->with('message', 'Workspace deleted successfully');
    }
}
