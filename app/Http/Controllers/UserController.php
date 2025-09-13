<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
//  Terminal command to create Controller

class UserController extends Controller
{
    function GetUser(){
        return "Farhan Hussain";
    }

    function about(){
        return "Im from Uttar pardesh";
    }

    function GetUserName($name){
        return "My name is ". $name;
    }

    // pagr is  Created in view folder and inherit here
    function ViewPage(){
        return view('controller');
    }

    // pass a value in url and inherit by controller and display at view page
    function ControllerName($name){
        return view('controllername',['name'=>$name]);
    }
// nested file in view
    function ControllerAdmin(){
        return view('admin.login');
    }

}
