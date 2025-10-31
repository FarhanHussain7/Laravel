<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\fruit;

class O19_Accessor extends Controller
{
    //In Laravel, an accessor is a method that lets you format or transform a model attribute when retrieving it from the database.
    //  It’s part of Eloquent’s Mutators & Casting system.

    // 🔍 What Is an Accessor?
// - An accessor modifies how a model attribute is returned.
// - It’s defined using the get{AttributeName}Attribute method.
// - Example: getFirstNameAttribute() formats the first_name field when accessed.

// 🧱 Syntax Example
// class User extends Model
// {
//     public function getFirstNameAttribute($value)
//     {
//         return ucfirst($value); // Capitalizes first letter
//     }
// }
// When you call $user->first_name, it returns the formatted value.


    function List(){
        return fruit::all();
    }


    function Mutator(){
        $data = new fruit();
        $data->name="mango";
        $data->email="mango";
        if($data->save()){
            echo "Data inserted";
        }else{
            echo "Not Inserted";
        }
    }
}
