<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestCntroller extends Controller
{
    public function index(Request $request)
    {
        $path = $request->path();
        echo '<br>path method '.$path ; 
        
        $pattern = $request->is('foo/*');
        echo '<br>is method : '.$pattern;

        $url = $request->url();
        echo '<br>url method : '.$url;
        
    }
}
