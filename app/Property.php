<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    //
    protected $table='property';


    public  function images(){
        return $this->hasMany('App\Images');
    }
}
