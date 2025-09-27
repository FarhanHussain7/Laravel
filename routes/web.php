<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\O4_UserController;
use App\Http\Controllers\O7_ViewController;
use App\Http\Controllers\O9_FormController;
use App\Http\Controllers\O10_Route;


// 01 -  For default page
// Route::view('/','O1_welcome');

Route::get('/', function () {
    return view('O1_welcome');
});


// 02 -  create route for php page
Route::get('/home', function () {
    return view('O2_Home');
});

// 03 - Passing the value in url
Route::get('/about/{name}', function ($name) {
    return view('O3_about',['name'=>$name]);
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
    return view('O7_SubView.home');
});
Route::get('/subabout',[O7_ViewController::class,'SubView']);

// O8 - Component
Route::get('/comp', function (){
    return view('O8_component');
});


// O9 - Form
// o1 - simple text form data
Route::get('/form', function(){
    return view('O9_Form.O1_form_data');
});
Route::post('/adduser',[O9_FormController::class,'addUser']);

// o2 - For CheckBox and Radio Button
Route::get('/check', function(){
    return view('O9_Form.O2_CheckBox_and_RadioBtn');
});
Route::post('/radio',[O9_FormController::class,'checkRadio']);

// o3 - For Validation of form
Route::get('/valid', function(){
    return view('O9_Form.O3_Validation_form');
});
// controller for validation
Route::post('/validinfo',[O9_FormController::class,'Validation']);

// 10 - Routes
//  o1 -
Route::get('/url', function(){
    return view('O10_Routes.O1_URL_Generation');
});

// o2 - Named routes
Route::view('/named','O10_Routes.O2_Named_Routes')->name('nr');
// o3 - Group routes
Route::prefix('group')->group(function(){
Route::view('/home','O10_Routes.O3_Routes_group_prefix');
Route::get('/show',[O10_Route::class,'Show']);
Route::get('/user',[O10_Route::class,'User']);
});
