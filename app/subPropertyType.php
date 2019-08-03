<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subPropertyType extends Model
{
    //
    protected $table='sub_propertytype';

    public function propertytype(){
        return  $this->belongsTo('App\propertytype');
    }
}
