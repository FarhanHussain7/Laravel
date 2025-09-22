<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// For condition need this
use Illuminate\Support\Facades\View;
class O7_ViewController extends Controller
{
    function ViewMe(){
        return view('O5_AboutMe');
    }

    function NestedFile(){
        return view('O5_View.Home.home');
    }
// it will Check that this page is exists or not
    function Check(){
        if(View::exists('about')){
            return view('about');
        }else{
            echo " this page is Not exists ";
        }
    }


    // O7 --- For Blade File
    function BladePara(){
        $name="Farhan Hussain";
        return view('O2_condition',['user'=>$name]);
    }

    function BladeArray(){
         $users=['Anil', 'Arjun', 'ankur'];
        return view('O6_Blade.O1_loop',['users'=>$users]);
    }

    function SubView(){
        return view('O7_SubView.about');
    }
}
