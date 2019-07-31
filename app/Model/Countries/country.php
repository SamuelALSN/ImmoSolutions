<?php

namespace App\Model\Countries;

use Illuminate\Database\Eloquent\Model;

class country extends Model
{
    //
    protected  $table='countries';
    public  function states(){
        return $this->hasMany('App\Model\Countries\state');
    }

    public  function users(){
        return $this->hasMany('App\Model\Countries\User');
    }
}
