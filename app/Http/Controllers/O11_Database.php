<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Student;
use Carbon\Carbon;
class O11_Database extends Controller
{
    //
// Connection and print data
    function users(){
        $users=  DB::select('select * from users');
        return view('O12_Database.O1_Connection',['users'=>$users]);
    }

    function student(){
        $stu= \App\Models\Student::all();
        return view('O13_Model.O1_mvc',['student'=>$stu]);
    }

    // Query Builder
     function query(){
        // $users=  DB::table('users')->get();
        // return $users;

        // $users=  DB::table('users')->where('name','Farhan Hussain')->get();
        // $users=  DB::table('users')->first();

        // return view('O12_Database.O2_Query_Build',['users'=>$users]);


$users = DB::table('users')->insert([
    'name' => 'tony kakar',
    'email' => 'tony@gmail.com',
    'email_verified_at' => '2025-10-07 23:30:00', // Correct format
    'password' => bcrypt('AutoTune'),             // Hash the password
    'remember_token' => 'Machine',
    'created_at' => Carbon::now(),                // Current timestamp
    'updated_at' => Carbon::now()                 // Optional but recommended
]);
        if($users){
            return "Data Inserted Sucessfully";
        }else{
            return "Not Inserted ";
        }

    }

}
