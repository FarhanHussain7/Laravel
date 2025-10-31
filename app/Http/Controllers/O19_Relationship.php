<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\seller;
use App\Models\Product;
class O19_Relationship extends Controller
{
    //

    // one to one
    function list(){
        return Seller::find(1)->ProductData;
    }

    //one to many
    function manyRel(){
        return Seller::find(1)->ProductManyData;
    }


    //
    function manyTomany(){
        // return Product::findall();

        $data = Product::with('seller')->get();
        return $data;
    }

    //
}
