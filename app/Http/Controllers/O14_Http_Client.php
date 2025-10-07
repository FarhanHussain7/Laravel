<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class O14_Http_Client extends Controller
{
    //
    function GetUser(){
        $response= Http::get('https://jsonplaceholder.typicode.com/users/1');
        $response = $response->body();
        // return $response->body();
        // return $response->status();
        // return $response->headers();

        return view('14_Http_Client.O1_Http',['data'=>json_decode($response)]);

    }
}
