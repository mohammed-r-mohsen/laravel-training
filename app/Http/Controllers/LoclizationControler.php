<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\support\Facades\App;
use illuminate\support\Facades\Session;
class LoclizationControler extends Controller
{
    public function SetLang($Local)
    {
        App::setLocale($Local);
        Session::put('local', $Local);
        
        return  redirect()->back();
    }
}
