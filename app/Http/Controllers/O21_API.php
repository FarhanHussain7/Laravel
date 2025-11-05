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


    public function index() {
        return Student::all();
    }

    public function AddStudent(Request $request) {
        return $request->input();
    }


    public function store(Request $request) {
        return Student::create($request->all());
    }

    public function show($id) {
        return Student::find($id);
    }

    public function update(Request $request, $id) {
        $post = Student::find($id);
        $post->update($request->all());
        return $post;
    }

    public function destroy($id) {
        return Student::destroy($id);
    }
}
