<?php

namespace App\Http\Controllers;

use App\Models\Template;
use Illuminate\Http\Request;
use stdClass;

class ThumbnailCreatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('creator.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, $user_template = '')
    {
        $foundTemplate = Template::where('template_id', $user_template)->get();
        if ($foundTemplate->count() == 0) :
            $foundTemplate = Template::find($id);
        endif;
        $data = new stdClass();
        unset($foundTemplate->created_at);
        unset($foundTemplate->deleted_at);
        unset($foundTemplate->updated_at);
        unset($foundTemplate->image_path);
        $jsonContent = file_get_contents(public_path($foundTemplate->json_path));
        $foundTemplate->jsonContent = $jsonContent;
        unset($foundTemplate->json_path);
        if ($foundTemplate) :
            return response()->json([
                'status' => 200,
                'message' => 'Template fetched successfully',
                'data' => $foundTemplate
            ], 200);
        endif;
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
    public function update(Request $request, $id)
    {
        //
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
    }
}
