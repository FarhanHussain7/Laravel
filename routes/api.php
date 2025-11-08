<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\O21_API;
use App\Http\Controllers\ResourceController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Testing
Route::get('/tesst',function(){
    return ["name"=>"Farhan Hussain","channel"=>"Step up"];
});



Route::get('/listest',[O21_API::class,"list"]);
Route::get('/list',[O21_API::class,"index"]);
Route::get('/list/{id}',[O21_API::class,"show"]);
Route::post('/addlist',[O21_API::class,"AddStudent"]);
Route::put('/updatelist',[O21_API::class,"update"]);
Route::delete('/deletelist/{id}',[O21_API::class,"destroy"]);
Route::get('/search/{name}',[O21_API::class,"SearchByName"]);


// Route::apiResource('posts', O21_API::class);
Route::resource('resource',ResourceController::class);


Route::get('/source',[O21_API::class,"SearchByName"]);
