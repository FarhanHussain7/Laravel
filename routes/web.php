<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\O4_UserController;
use App\Http\Controllers\O7_ViewController;

// 01 -  For default page
Route::get('/', function () {
    return view('welcome');
});


// 02 -  create route for php page
Route::get('/home', function () {
    return view('O2_Home');
});

// 03 - Passing the value in url
Route::get('/about/{name}', function ($name) {
    return view('about',['name'=>$name]);
});

// 04 - Controller all type of routes
Route::get('/controller', [O4_UserController::class,'GetUser']);
Route::get('/about', [O4_UserController::class,'about']);
// Passing parameter in url
Route::get('/getname/{name}', [O4_UserController::class,'GetUserName']);
Route::get('/view', [O4_UserController::class,'ViewPage']);
Route::get('/conuser/{name}', [O4_UserController::class,'ControllerName']);
Route::get('/admin', [O4_UserController::class,'ControllerAdmin']);

// 05 -  For View files
Route::get('/aboutme',[O7_ViewController::class,'ViewMe']);
// Nested file
Route::get('/nested',[O7_ViewController::class,'NestedFile']);
// Check this page is exists or not
Route::get('/check',[O7_ViewController::class,'Check']);

// 06 - Blade routes
Route::get('/blade',[O7_ViewController::class,'BladePara']);
Route::get('/bladearray',[O7_ViewController::class,'BladeArray']);

// 07 - SubView
Route::get('/subview', function (){
    return view('10_SubView.home');
});

Route::get('/subabout',[O7_ViewController::class,'SubView']);

