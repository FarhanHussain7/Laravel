<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class seller extends Model
{
    //one to one

    function productData(){
        return $this->hasOne('App/Models/Product',"owner_id");
    }

    // one to many

    function ProductManyData(){
        return $this->hasMany('App/Models/Product',"owner_id");
    }
}
