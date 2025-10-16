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

// Route Group with controller
Route::controller(O10_Route::class)->group(function(){
    Route::get('show','Show');
    Route::get('user','user');
    Route::get('delete','Delete');
});

// Route Methods
Route::get('/getmethods',[O10_Route::class,'GetUser']);
Route::post('/postmethods',[O10_Route::class,'PostUser']);
Route::put('/putmethods',[O10_Route::class,'PutUser']);
Route::delete('/deletemethods',[O10_Route::class,'DeleteUser']);
Route::any('/anymethods',[O10_Route::class,'AnyUser']);
Route::match(['get','post'],'/matchmethods',[O10_Route::class,'MatchGetPost']);
Route::match(['put','delete'],'/matchmethods',[O10_Route::class,'MatchPutDelete']);

Route::view('/formdata','O10_Routes.O4_Route_Methods');



// 11 - Middleware

//  Indirect way : app.php file is in the middle
// Single route with group middleware
Route::view('/middleware','O11_Middleware.O1_middleware')->middleware('middle');
// Multiple route with group middleware
Route::middleware('middle')->group(function(){
Route::view('/ware','O11_Middleware.O1_middleware');
Route::view('/home','O11_Middleware.O2_Group_middleware_Home');
Route::view('/about','O11_Middleware.O3_Group_middleware_About');
});

// Direct way : no file in between middleware and view
use App\Http\Middleware\O4_Assiging_Route;
Route::view('/directmid','O11_Middleware.O4_Route_Middleware')->middleware(O4_Assiging_Route::class);

use App\Http\Middleware\CountryCheck;
Route::view('/directmultimid','O11_Middleware.O4_Route_Middleware')->middleware([CountryCheck::class,O4_Assiging_Route::class]);


// 12 - Database Connection
use App\Http\Controllers\O11_Database;
// o1 - Connection to data
Route::get('/db',[O11_Database::class,'users']);

// o2 - Query Builder
Route::get('/querybuilder',[O11_Database::class,'query']);
// o3 - Eloquent Query
Route::get('/eloquentquerybuilder',[O11_Database::class,'Eloquent']);

// o4 - Insert data
Route::view('/insertform','O12_Database.O4_Insert_Data');
Route::post('/insertdata',[O11_Database::class,'InsertData']);
// o5 - Read Data
Route::get('/readdata',[O11_Database::class,'READ']);
// o6 - Delete Data
Route::get('/deletedata/{id}',[O11_Database::class,'DELETEDATA']);



// 13 - Model - To access or visualize data in web page
Route::get('/model',[O11_Database::class,'student']);



// 14 - Http
// o1 - Http
use App\Http\Controllers\O14_Http_Client;
Route::get('/http',[O14_Http_Client::class,'GetUser']);

// o2 - Request class
Route::get('/requestget',[O14_Http_Client::class,'Request']);
Route::post('/requestpost',[O14_Http_Client::class,'RequestPost']);
Route::view('/requestform','O14_Http_Client.O2_http_Request_class');

// o3 - Session
Route::view('/sessionform','O14_Http_Client.O3_Session');
Route::post('/sessionget',[O14_Http_Client::class,'Session']);
Route::get('/sessionlogout',[O14_Http_Client::class,'Logout']);

// o4 - Flash session
Route::view('/flashform','O14_Http_Client.O4_Flash_session');
Route::post('/flashpost',[O14_Http_Client::class,'Flash']);

// 15 - File
use App\Http\Controllers\O15_File;
Route::view('/file','O15_File.O1_Upload');
Route::post('/upload',[O15_File::class,'Upload']);

// 16 - Localization :-  Showing local language according to the country

Route::middleware('SetLang')->group(function(){
    Route::view('/locwelcome','O16_Localization.O1_welcome');
    Route::view('/locabout','O16_Localization.O2_About');
    Route::view('/lochome','O16_Localization.O3_Home');
    Route::view('/loccontact','O16_Localization.O4_Contactus');

    Route::get('/locabout/{lang}', function ($lang) {
    App::setlocale($lang);
    return view('O16_Localization.O2_About');
    });

    Route::get('/setlang/{lang}', function ($lang) {
    Session::put('lang',$lang);
    return view('O16_Localization.O1_welcome');
    });
});
