<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;

class testcontroller extends Controller
{
    public function index()
    {
        echo "<br>test controller <br>" ; 
    }
}
