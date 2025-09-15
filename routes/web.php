<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\O4_UserController;
use App\Http\Controllers\O7_ViewController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('O2_Home');
});

Route::get('/about/{name}', function ($name) {
    return view('about',['name'=>$name]);
});

// controller
Route::get('/controller', [O4_UserController::class,'GetUser']);
Route::get('/about', [O4_UserController::class,'about']);
// Passing parameter in url
Route::get('/getname/{name}', [O4_UserController::class,'GetUserName']);
Route::get('/view', [O4_UserController::class,'ViewPage']);
Route::get('/conuser/{name}', [O4_UserController::class,'ControllerName']);
Route::get('/admin', [O4_UserController::class,'ControllerAdmin']);

// For View controller

Route::get('/aboutme',[O7_ViewController::class,'ViewMe']);
// Nested file
Route::get('/nested',[O7_ViewController::class,'NestedFile']);
// Check this page is exists or not
Route::get('/check',[O7_ViewController::class,'Check']);


Route::get('/blade',[O7_ViewController::class,'BladePara']);
Route::get('/bladearray',[O7_ViewController::class,'BladeArray']);
