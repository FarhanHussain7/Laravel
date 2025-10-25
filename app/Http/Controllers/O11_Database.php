<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Student;
use App\Models\User;
use App\Models\image;
use Carbon\Carbon;
class O11_Database extends Controller
{
    // O1 ---------------------------------------------------------------------------------------------------------------------------------
// Connection and print data
    function users(){
        $users=  DB::select('select * from users');
        return view('O12_Database.O1_Connection',['users'=>$users]);
    }

    function student(){
        $stu= \App\Models\Student::all();
        return view('O13_Model.O1_mvc',['student'=>$stu]);
    }

    //O2 Query Builder -------------------------------------------------------------------------------------------------------------------
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

    // O3 - Eloquent Query ---------------------------------------------------------------------------------------------------------------
        function Eloquent(){

// READ DATA --------------------------
            // $response = User::all();
            // $response = User::get();
// FIND SELECTIVE DATA ------------------------
            // $response = User::where('name',"tony kakar")->get();
            // $response = User::find(1);
            // $response = [$response];
        //  return view('O12_Database.O3_Eloquent_Query',['users'=>$response]);

// INSERT DATA ---------------------------
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


//  UPDATE DATA -------------------
        // $users = User::where('name','Sona Lal')->update(['email'=>'soonaaji@gmail.com']);
        // if($users){
        //     return "Data Updated Sucessfully";
        // }else{
        //     return "Not Updated ";
        // }
// DELETE DATA ---------------------
        $users = User::where('name','Sona Lal')->delete();
        if($users){
            return "Data Deleted Sucessfully";
        }else{
            return "Not Deleted ";
        }
        }

// O4 - Insert Data -----------------------------------------------------------------------------------------------------------------
// Insert data in students table
        function InsertData(Request $request){
            $student= new Student();
            $student->name=$request->name;
            $student->email=$request->email;
            $student->batch=$request->batch;
            $student->save();
            if($student){
               return redirect('/readdata');
            }
            else{
                echo "Not Inserted ";
            }

            // return "Data is added";
        }
// O5 - Read Data ===============================================================================
        function READ(){
            // $studentData = Student::all();
            // Pagination function with limit of 3
            $studentData = Student::paginate(3);

            return view('O12_Database.O5_Read_data',['students'=>$studentData]);
        }

        function DELETEDATA($std){
            $DataDeleted = Student::destroy($std);
            if($DataDeleted){
               return redirect('/readdata');
            }else{
                echo "Data Not Deleted";
            }
        }

        function EDITDATA($std){
            $Dataedit = Student::find($std);
               return view('O12_Database.O7_Edit_data',['data'=>$Dataedit]);
        }

        function UPDATEDATA(Request $request, $std){
             $student = Student::find($std);
             $student->name=$request->name;
            $student->email=$request->email;
            $student->batch=$request->batch;
            $student->save();
            if($student){
               return redirect('/readdata');
            }
            else{
                echo "Not Inserted ";
            }
            //    return $request->input();
        }

        function SEARCHDATA(Request $request){
            $searchData = Student::where('name','like',"%$request->search%")->get();
            // return $searchData;
            return view('O12_Database.O5_Read_data',['students'=>$searchData,'search'=>$request->search]);
        }


            function DELETEMULTIPLE(Request $request){
            $DataDeleted = Student::destroy($request->ids);
            if($DataDeleted){
               return redirect('/readdata');
            }else{
                echo "Data Not Deleted";
            }
        }

        function UPLOADIMAGE(Request $request){
            $path = $request->file('file')->store('Images','public');
            $PathArray = explode("/", $path);
            $imgPath=$PathArray[1];
            $img = new image();
            $img->path=$imgPath;
            // return $img->save();
            if ($img->save()){
                return redirect('/viewuploadimg');
            }else{
                return "Error ! No Image Upload";
            }
        }

        function VIEWIMAGE(){
            $images = image::all();
            return view('O12_Database.O8_Upload_Image', ['imgData' => $images]);
        }
}
