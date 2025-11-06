<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Student;

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



// POST
    // public function store(Request $request) {
    //     return Student::create($request->all());
    // }


//PUT
    // public function update(Request $request, $id) {
    //     $post = Student::find($id);
    //     $post->update($request->all());
    //     return $post;
    // }


}
