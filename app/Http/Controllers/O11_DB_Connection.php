<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class O11_DB_Connection extends Controller
{
    //

    function users(){
        return DB::select('select * from users');
    }
}
