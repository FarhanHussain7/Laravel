<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hoes', function () {
    return view('Home');
});

Route::get('/about/{name}', function ($name) {
    return view('about',['name'=>$name]);
});

// controller
Route::get('/controller', [UserController::class,'GetUser']);
Route::get('/about', [UserController::class,'about']);
Route::get('/getname/{name}', [UserController::class,'GetUserName']);
Route::get('/view', [UserController::class,'ViewPage']);
Route::get('/conuser/{name}', [UserController::class,'ControllerName']);
Route::get('/admin', [UserController::class,'ControllerAdmin']);
