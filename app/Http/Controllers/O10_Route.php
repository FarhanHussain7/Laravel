<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class O10_Route extends Controller
{
    //

    function Show(){
        return "Student routes";
    }

    function User(){
        return "User Routes";
    }

    function Delete(){
        return "Delete function ";
    }
// Larvel Route Methods
    function GetUser(Request $req){
        return $req;
    }

    function PostUser(Request $req){
        echo "User Data : <br/>";
        return $req;
    }

    function PutUser(Request $req){
        echo "User Data : <br/>";
        return $req;
    }

    function DeleteUser(Request $req){
        echo "User Data : <br/>";
        return $req;
    }

    function AnyUser(Request $req){
        echo "User Data : <br/>";
        return $req;
    }
// This is Only for Get and Post
    function MatchGetPost(Request $req){
        echo "User Data : <br/>";
        return $req;
    }
    // This is for Put and Delete
    function MatchPutDelete(Request $req){
        echo "User Data : <br/>";
        return $req;
    }
}
