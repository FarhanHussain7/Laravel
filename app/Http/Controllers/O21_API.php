<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Student; // It is used to Create CRUD Operations
use App\Models\User; // It is used to create token with sanctum
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class O21_API extends Controller
{
    //
    public function list(){
        return "This is just for checking";
    }

// GET
    public function index() {
        return Student::all();
    }

//
    public function show($id) {
        return Student::find($id);
    }

// POST
    public function AddStudent(Request $request) {
        // return $request->input();

        // Validation
        $rules = array(
            'name'=>'required | min:2 | max:10',
            'email'=>'email | required ',
            'batch'=>'required | min:6 | max:16'
        );
        $validation = Validator::make($request->all(), $rules);

        if($validation->fails()){
            return $validation->errors();
        }else{
            $student = new Student();
        $student->name=$request->name;
        $student->email=$request->email;
        $student->batch=$request->batch;
        if($student->save()){
            return ["Result"=>"Student Added......"];
        }else {
            return ["Result"=>"Operation faild"];
        }
        }
    }


    // PUT
    public function update(Request $request) {
        $student = Student::find($request->id);
        $student->name=$request->name;
        $student->email=$request->email;
        $student->batch=$request->batch;
        if($student->save()){
            return ["Result"=>"Student Updated......"];
        }else {
            return ["Result"=>"Operation faild"];
        }
    }

    // DELETE
    public function destroy($id) {
        $student = Student::destroy($id);
        if($student){
            return ["Result"=>"Student Deleted......"];
        }else {
            return ["Result"=>"Operation faild"];
        }
    }

    // Serching By The Student name
    public function SearchByName($name){
        $student = Student::where('name','like',"%$name%")->get();
        if($student){
          return ["Result"=>$student];
        }else {
            return ["Result"=>"Operation faild !no record found"];
        }
    }


    // ===================== SANCTUM ========================================
// Creating Token With the Sanctum api
// body :{ name: "", email:"" , password:""}
    public function SignUp(Request $request){
        $input = $request->all();
        $input["password"] = bcrypt($input["password"]);
        $user = User::create($input);
        $success['token'] = $user->createToken('MyApp')->plainTextToken;
        $user['name']=$user->name;
        return ['success'=>true,"result"=>$success,"msg"=>"user register successfully"];
    }

// Login api --------------
    public function Login(Request $request){
            $user = User::where('email',$request->email)->first();
            if(!$user || !Hash::check($request->password,$user->password)){
                return ['result'=>"User Not found","Success"=>false];
            }
            $success['token']=$user->createToken('MyApp')->plainTextToken;
            $success['name']=$user->name;

        return ['result'=>$success, 'msg'=>"user register successfully"];
    }

//========= Test Token ================

public function UserList() {
        return User::all();
    }
}
