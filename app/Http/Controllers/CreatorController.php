<?php

namespace App\Http\Controllers;

use App\Models\Template;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mtownsend\RemoveBg\RemoveBg;

class CreatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $myTemplates = Template::where('template_owner', Auth::user()->id)->get();
        return view('dashboard.designs.index')->with('templates', $myTemplates);
    }

    public function search($type)
    {
        $formattedType = str_replace('-', ' ', $type);
        $foundTemplates = Template::where('template_tags', 'LIKE',  "%{$formattedType}%")->orderBy('id', 'DESC')->get();

        $data = [
            'templates' => $foundTemplates,
            'type' => $formattedType,
            'temp' => substr(uniqid(), 7)
        ];
        return view('dashboard.templates.index')->with($data);
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
        $imageData = $request->input('canvasImage');
        $img = str_replace('data:image/png;base64,', '', $imageData);
        $img = str_replace(' ', '+', $img);
        $fileData = base64_decode($img);
        $templateCode = substr(uniqid(), 7);
        $fileName = 'template_images/template_' . $templateCode . '.png';
        file_put_contents(public_path($fileName), $fileData);

        $canvasJson = str_replace('data:text/json;charset=utf-8,', '', urldecode($request->input('canvasString')));
        $jsonName = 'templates_json/template_' . $templateCode . '.json';
        file_put_contents(public_path($jsonName), $canvasJson);

        $isCreated = Template::create([
            'template_id' => $templateCode,
            'image_path' => $fileName,
            'json_path' => $jsonName,
            'dimension' => $request->input('dimensions'),
            'template_tags' => $request->input('templateTags'),
            'template_owner' => 'admin',
        ]);

        if (!$isCreated) :
            return response()->json([
                'status' => 400,
                'error' => 'An error occurred trying to create template'
            ], 400);
        endif;

        return response()->json([
            'status' => 201,
            'message' => 'Template created successfully',
            "data" => $isCreated
        ], 201);
    }

    public function saveMyDesign(Request $request)
    {
        $imageData = $request->input('canvasImage');
        $img = str_replace('data:image/png;base64,', '', $imageData);
        $img = str_replace(' ', '+', $img);
        $fileData = base64_decode($img);
        $templateCode = $request->input('templateId');
        $fileName = 'template_images/template_' . $templateCode . '.png';
        file_put_contents(public_path($fileName), $fileData);

        $canvasJson = str_replace('data:text/json;charset=utf-8,', '', urldecode($request->input('canvasString')));
        $jsonName = 'templates_json/template_' . $templateCode . '.json';
        file_put_contents(public_path($jsonName), urldecode($canvasJson));

        $isCreated = Template::create([
            'template_id' => $templateCode,
            'template_name' => $request->input('templateName'),
            'dimension' => $request->input('dimensions'),
            'image_path' => $fileName,
            'json_path' => $jsonName,
            'template_tags' => $request->input('templateTags'),
            'template_owner' => Auth::user()->id,
        ]);

        if (!$isCreated) :
            return response()->json([
                'status' => 400,
                'error' => 'An error occurred trying to create template'
            ], 400);
        endif;

        return response()->json([
            'status' => 201,
            'message' => 'Image saved successfully',
            "data" => $isCreated
        ], 201);
    }

    public function removeBackground(Request $request)
    {
        $imageData = $request->input('imageData');
        $img = str_replace('data:image/png;base64,', '', $imageData);
        $img = str_replace(' ', '+', $img);

        $removeBg = new RemoveBg(env('REMOVEBG_API_KEY'));
        $account = $removeBg->account();

        if ($account->data->attributes->credits->total > 1 || $account->data->attributes->api->free_calls > 1) :
            $base64Data = $removeBg->file($img)->getBase64();

            $responseData = 'data:image/png;base64,' . $base64Data;

            return response()->json([
                'status' => 200,
                'message' => 'Image background removed successfully',
                "data" => $responseData
            ], 200);
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
