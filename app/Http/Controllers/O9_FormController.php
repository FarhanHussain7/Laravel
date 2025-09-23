<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class O9_FormController extends Controller
{

    //
    function addUser(Request $request){
        // return $request;  // It will print all the data like token also in a json form

        // It will print data seprately
        echo "User name is : ".$request->username."<br/>";
        echo "User Email is : $request->email <br/>";
        echo "User password is : ".$request->password."<br/>";
    }
}
