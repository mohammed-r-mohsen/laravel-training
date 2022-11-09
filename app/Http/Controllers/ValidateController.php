<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValidateController extends Controller
{
    public function index()
    {
        return view('validationLogin');
    }

    public function ValidateForm(Request $request)
    {
        $validator=$request->validate([
            'email' =>'required|email',
            'password' =>'required|min:6',
        ]);
        
          return redirect('/valiate')->withErrors($validator);

    }
}
