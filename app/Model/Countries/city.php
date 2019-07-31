<?php

namespace App\Model\Countries;

use Illuminate\Database\Eloquent\Model;

class city extends Model
{
    //
    protected $table='cities';
    public  function state(){
        return $this->belongsTo('App\Model\Countries\state');
    }
}
