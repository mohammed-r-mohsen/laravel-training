<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
class cookieController extends Controller
{
    public function setcookie(Request $requst)
    {
        
        $time = 1 ; 
        $cookie = [
            'name' => 'test',
            'value' => 'test cookie',
            'expires' => $time
        ];

        $respone = new Response('hello world ');
         $respone->withCookie(cookie($cookie['name'] , $cookie['value'] , $cookie['expires']));
        return $respone;
    }

    public function getcookie(Request $requst)
    {
        $value = $requst->cookie('test');
        echo $value;
    }
}
