<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class O9_FormController extends Controller
{

    //
    function addUser(Request $request){
        // It will print all the data like token also in a json form
        // return $request;


        // It will print data seprately
        echo "User name is : ".$request->username."<br/>";
        echo "User Email is : $request->email <br/>";
        echo "User password is : ".$request->password."<br/>";
    }

    function checkRadio(Request $request){
            // return $request;

            // echo "User Skills : ".$request->skill."<br/>";
            print_r($request->skill);
            echo "<br/>";
            echo "User Gender : ".$request->gender."<br/>";
            echo "User City : ".$request->city."<br/>";
            echo "User Age : ".$request->age."<br/>";
    }
}
