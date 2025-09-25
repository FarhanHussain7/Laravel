<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class O9_FormController extends Controller
{

    // O1 - Form Data
    function addUser(Request $request){
        // It will print all the data like token also in a json form
        // return $request;


        // It will print data seprately
        echo "User name is : ".$request->username."<br/>";
        echo "User Email is : $request->email <br/>";
        echo "User password is : ".$request->password."<br/>";
    }

    // O2 - CheckBox and Radio Button
    function checkRadio(Request $request){
            // return $request;

            // echo "User Skills : ".$request->skill."<br/>";
            print_r($request->skill);
            echo "<br/>";
            echo "User Gender : ".$request->gender."<br/>";
            echo "User City : ".$request->city."<br/>";
            echo "User Age : ".$request->age."<br/>";
    }


    // O3 - Form Validation
    function Validation(Request $request){

        $request->validate([
            'username'=>'required | min:3 | max:15',
            'email'=>'required | email',
            'password'=>'required | min:4 | max:20',
            'skill'=>'required',
        ]);

        return $request;
    }
}
