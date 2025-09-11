<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hoes', function () {
    return view('Home');
});

Route::get('/about/{name}', function ($name) {
    return view('about',['name'=>$name]);
});
