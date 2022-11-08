<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller ; 

class userController extends Controller
{
    public function __construct() {
        $this->middleware('secondMiddleware');
    }

    public function showpath(Request $request)
    {
        $uri = $request->path();
        echo "<br>uri : $uri";

        $url = $request->url();
        echo "<br>uri : $url";

        $method = $request->method();
        echo "<br>method : $method";

        
        
    }
}
