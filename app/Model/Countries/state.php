<?php

namespace App\Model\Countries;

use Illuminate\Database\Eloquent\Model;

class state extends Model
{
    //
    protected  $table='states';

    public function cities(){
        return $this->hasMany('App\Model\Countries\city');
    }

    public  function country(){
        return $this->belongsTo('App\Model\Countries\country');
    }
}
