<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function ckeditor(Request $request)
    {

        $validation = \Validator::make($request->all(), [
            'upload' => 'required|image'
        ]);
        if ($validation->fails()) {
            $data = ['uploaded' => 0, 'error' => ['message' => 'the file must be an image']];
        } else {
            $data = ['url' => asset(uploadFile($request->upload)), 'uploaded' => 1, 'fileName' => $request['upload']->getClientOriginalName()];
        }
        return response()->json($data);
    }
}
