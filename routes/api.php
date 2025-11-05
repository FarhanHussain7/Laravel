<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\O21_API;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Testing
Route::get('/tesst',function(){
    return ["name"=>"Farhan Hussain","channel"=>"Step up"];
});



Route::get('/listest',[O21_API::class,"list"]);
Route::get('/list',[O21_API::class,"index"]);
Route::post('/addlist',[O21_API::class,"AddStudent"]);
Route::apiResource('posts', O21_API::class);
