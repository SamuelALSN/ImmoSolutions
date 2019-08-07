<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //
    protected  $table='image';

    public function property(){
        return $this->hasOne('App\Property');
    }
}
