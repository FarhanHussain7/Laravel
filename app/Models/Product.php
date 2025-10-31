<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //

    use HasFactory;

    function seller(){
        return $this->belongsTo("App\models\seller");
    }
}
