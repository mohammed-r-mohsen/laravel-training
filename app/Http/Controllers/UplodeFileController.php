<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UplodeFileController extends Controller
{
    public function index()
    {
        return view('UplodeFile');
    }

    public function UploadForm(Request $request)
    {

        $file = $request->file('file');
      
        $name = $file->getClientOriginalName();
        $extension = $file->getClientOriginalExtension();
        $mime = $file->getClientMimeType();
        $size = $file->getSize();
        $path = $file->getRealPath();

        return response()->json(['name'=>$name , 'extensin'=>$extension , 'mime'=>$mime , 'size'=>$size, 'path'=>$path ]);






    }
}
