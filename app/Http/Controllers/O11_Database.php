<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Student;
use App\Models\User;
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
        // ============= Read Data ================================
        $users=  DB::table('users')->get();
        // return $users;

        // ==================== Find Data  ========================
        // $users=  DB::table('users')->where('name','Farhan Hussain')->get();
        // $users=  DB::table('users')->first();

        return view('O12_Database.O2_Query_Build',['users'=>$users]);

        // ======================= Insert Data ==================================
// $users = DB::table('users')->insert([
//     'name' => 'tony kakar',
//     'email' => 'tony@gmail.com',
//     'email_verified_at' => '2025-10-07 23:30:00', // Correct format
//     'password' => bcrypt('AutoTune'),             // Hash the password
//     'remember_token' => 'Machine',
//     'created_at' => Carbon::now(),                // Current timestamp
//     'updated_at' => Carbon::now()                 // Optional but recommended
// ]);
//         if($users){
//             return "Data Inserted Sucessfully";
//         }else{
//             return "Not Inserted ";
//         }


        //  ===================== Update data ================================

        // $result = DB::table('users')->where('name','tony kakar')
        // ->update(['email'=>'ooyetony@gmail.com']);
        // if($result){
        //     return 'Data Updated';
        // }else{
        //     return "Data Not Updated";
        // }
        //  ===================== Update data ================================

        // $result = DB::table('users')->where('name','tony kakar')
        // ->delete();
        // if($result){
        //     return 'Data Deleted';
        // }else{
        //     return "Data Not Deleted ";
        // }
    }

        function Eloquent(){
            // $response = User::all();
            // $response = User::get();
            // $response = User::where('name',"tony kakar")->get();
            // $response = User::find(1);
            // $response = [$response];

        //  return view('O12_Database.O3_Eloquent_Query',['users'=>$response]);

//             $users = User::insert([
//     'name' => 'Sona Lal',
//     'email' => 'sonaji@gmail.com',
//     'email_verified_at' => '2025-10-07 23:30:00', // Correct format
//     'password' => bcrypt('Master ji'),             // Hash the password
//     'remember_token' => 'Incharge',
//     'created_at' => Carbon::now(),                // Current timestamp
//     'updated_at' => Carbon::now()                 // Optional but recommended
// ]);
//         if($users){
//             return "Data Inserted Sucessfully";
//         }else{
//             return "Not Inserted ";
//         }



        // $users = User::where('name','Sona Lal')->update(['email'=>'soonaaji@gmail.com']);
        // if($users){
        //     return "Data Updated Sucessfully";
        // }else{
        //     return "Not Updated ";
        // }

        $users = User::where('name','Sona Lal')->delete();
        if($users){
            return "Data Deleted Sucessfully";
        }else{
            return "Not Deleted ";
        }



        }

}
