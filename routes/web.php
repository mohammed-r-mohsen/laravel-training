<?php

use App\Http\Controllers\testcontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\RequestCntroller;
use App\Http\Controllers\RetrevingCntroller;
use App\Http\Controllers\cookieController;
use App\Http\Controllers\RedirectContrller;
use Illuminate\Http\Response;
use App\Http\Controllers\LoclizationControler;
use App\Http\Controllers\SessionController;
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
Route::get('/deafult', function () {
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

// middleware rroute 
Route::get('/role',[

    'middleware'=>'test:editor' ,
    'uses'=> 'App\Http\Controllers\testcontroller@index',

]);
Route::get('/role','App\Http\Controllers\testcontroller@index')->middleware('test:editor');

Route::get('/terminal',[
 'middleware'=> 'terminal',
 'uses' => 'App\Http\Controllers\abccontroller@index',
]);

// controller 

Route::get('/usercontroller' , [userController::class , 'showpath'])->middleware('firstMiddleware');

//request 

Route::get('/foo/bar',[RequestCntroller::class , 'index']);

Route::get('/register/submit',[RetrevingCntroller::class , 'postRegister'])->name('registersubmit');

Route::get('/register',function(){
    return view('test');
});

// cookie 

Route::get('/cookie/set' , [cookieController::class , 'setcookie']);

Route::get('/cookie/get' , [cookieController::class , 'getcookie']);

// respone 
Route::get('/header',function(){
    return response('hello',200)->header('content-type','test/html');
});

Route::get('/headercookie',function(){
    return response('hello',200)
    ->header('content-type','test/html')
    ->withCookie('respone','test cookie respone ')
    ;
});

Route::get('/json',function(){
    return response()->json(['name'=>'mohammed' , 'age'=>15 , 'work'=>'laravel devloper']);
});

// views 

Route::any('/view1', function () {
    return view('views',['name'=>'mohammed mohsen']);
});

Route::any('/view2', function () {
    return view('views2', ['name' => 'mohammed mohsen']);
});

// redirection 
// redirect to view 
Route::get('/redirect', function () {
    return redirect()->to('/view1');
});

#redirect by route name 

Route::get('/redirect2', function () {
    return redirect()->route('view2');
});

Route::get('/redirect',function(){
    return redirect()->action([RedirectContrller::class , 'redirectPage']);
});


// localization 
Route::get('/', function (){
    return view('localization');
});

Route::get('/local/{lang}' , [LoclizationControler::class , 'SetLang']);

// Session 
 
Route::get('session/get', [SessionController::class , 'acessSesion']);
Route::get('session/set', [SessionController::class , 'StoreSession']);
Route::get('session/remove',[SessionController::class , 'removeSession']);