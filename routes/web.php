<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// basic route 
Route::get('/', function () {
    return view('welcome');
})->name('deafult');

Route::get('/test' , function()
{
    return view('test');
})->name('basic');

// route parameeters 

Route::get('/test2/{name}' , function($name='user'){
    return $name ; 
})->name('require-parameter');

Route::get('/test3/{name?}' , function($name='user'){
    return $name ; 
})->name('optional-parameter');

Route::get('/test4/{name}/{id?}' , function($name , $id = 12){
    return "name : $name \n id : $id"; 
})->name('rule-parameter');


