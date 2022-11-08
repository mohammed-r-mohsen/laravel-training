<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedirectContrller extends Controller
{
    public function redirectPage()
    {
        return view('views2');
    }
}
