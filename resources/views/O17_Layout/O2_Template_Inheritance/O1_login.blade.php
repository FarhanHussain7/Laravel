@extends('O17_layout.O2_Template_Inheritance.O3_layout')
@section('title','this is login page')

@section('main')
    <div class="form">
            <h1 id="heading" class="heading">User Login</h1>
            <input type="text" name="name" placeholder="Enter your name">
            <br/>
            <br/>
            <input type="text" name="password" placeholder="Enter your password">
            <br/>
            <br/>
            <button>Submit</button>
        </div>
@endsection
