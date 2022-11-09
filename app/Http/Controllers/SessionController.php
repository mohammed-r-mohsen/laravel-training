<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\Support\Facades\Session;
class SessionController extends Controller
{
    public function acessSesion(Request $reqest)
    {
        if(Session::has('myName')):
            echo Session::get('myName');
        else:
            echo "no data in the request "; 
        endif;
    }

    public function StoreSession(Request $request)
    {
        Session::put('myName','mohammed mohsen');
        echo "Data session has been stored";
    }

    public function removeSession(Request $request)
    {
        Session::forget('myName');
        echo "Data session has been removed";

    }
}
