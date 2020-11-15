<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    //
    public function index()
    {
        return view('upload');
    }

    public function upload(Request $request)
    {
        $uploadFileNewName = $request->file('fileUpload')->store('public');
        return "file {$uploadFileNewName} has been uploaded";

    }
}
