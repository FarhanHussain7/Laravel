<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class O14_Http_Client extends Controller
{
    // O1 - Http Client
    function GetUser(){
        $response= Http::get('https://jsonplaceholder.typicode.com/users/1');
        $response = $response->body();
        // return $response->body();
        // return $response->status();
        // return $response->headers();

        return view('O14_Http_Client.O1_Http',['data'=>json_decode($response)]);

    }

    // O2 - Http Request Class
    function Request(Request $req){
        return $req;
    }

    function RequestPost(Request $req){
        echo "Method of Request is ".$req->method();
        echo "<br/>";
        echo "Path of Request is ".$req->path();
        echo "<br/>";
        echo "Url of Request is ".$req->url();
        echo "<br/>";
        echo "Name of Request is ".$req->input('name');
        echo "<br/>";
        echo "Password of Request is ".$req->input('password');
        echo "<br/>";
        print_r($req->input());
        echo "<br/>";
        print_r($req->collect());
        echo "<br/>";
        if($req->isMethod('post')){
            echo "This is a Post Method Request";
        }else{
            echo "This is not post Request";
        }
        echo "<br/>";

        if($req->is('url')){
            echo "This is a Post Request path";
        }else{
            echo "No post Request";
        }
        echo "<br/>";

        echo "Ip Of the Request ".$req->ip();
        echo "<br/>";

    }

// o3 - Session
    function Session(Request $request){
        // return $request->input();
        $request->session()->put('name',$request->input('name'));
        return redirect('/sessionform');
        // echo session('name');
    }

    function Logout(){
        session()->pull('name');
        return redirect('/sessionform');
    }


    // o4 - Flash session controller
    function Flash(Request $request){
         $request->session()->Flash('message','User Added Successfully');
         $request->session()->keep('message','User Added Successfully');

        return redirect('/flashform');
    }

}
