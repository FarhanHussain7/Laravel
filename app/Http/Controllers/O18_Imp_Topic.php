<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class O18_Imp_Topic extends Controller
{
    //O6 - Route Model Binding
    function index(Student $key){
        // return $key; //for Single data
        return $key->all(); //for all data
    }
}
