<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fruit extends Model
{
    //
    use HasFactory;

    // Asscesor function
    function getNameAttribute($val){
        return ucfirst($val);
    }
    function getEmailAttribute(){
        return "all";
    }

    //Mutator

    function setNameAttribute($val){
        $this->attributes['name']=ucfirst($val);
    }
    function setEmailAttribute($val){
        $this->attributes['email']=$val."@gmail.com";
    }

}
