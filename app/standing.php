<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class standing extends Model
{
    //
    protected $table='standing';

    public  function properties(){
        return $this->hasMany('App\Property');
    }
}
