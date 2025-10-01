<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class O11_DB_Connection extends Controller
{
    //

    function users(){
        $users=  DB::select('select * from users');
        return view('O12_MySql.O1_Connection',['users'=>$users]);
    }
}
