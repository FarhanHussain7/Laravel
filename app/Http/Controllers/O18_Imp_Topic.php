<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\facades\Blade;
class O18_Imp_Topic extends Controller
{
    //O6 - Route Model Binding
    function index(Student $key){
        // return $key; //for Single data
        return $key->all(); //for all data
    }


    // o7 - Inline Blade template
    function Blade(){
        $totalProduct=20;
        return Blade::render('<h1 style="color:red">{{$total}} Blade Template </h1>',['total'=>$totalProduct]);
    }
}
