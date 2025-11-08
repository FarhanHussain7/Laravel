<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class ResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
        return Student::all();
    }

    public function store(Request $request) {
        return Post::create($request->all());
    }

    public function show($id) {
        return Post::find($id);
    }

    public function update(Request $request, $id) {
        $post = Post::find($id);
        $post->update($request->all());
        return $post;
    }

    public function destroy($id) {
        return Post::destroy($id);
    }
}
