<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Student;

class O11_DB_Connection extends Controller
{
    //

    function users(){
        $users=  DB::select('select * from users');
        return view('O12_MySql.O1_Connection',['users'=>$users]);
    }

    function student(){
        $stu= \App\Models\Student::all();
        return view('O13_Model.O1_mvc',['student'=>$stu]);
    }
}
