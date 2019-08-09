<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class propertytype extends Model
{
    //
   protected $table = 'propertytype';

    public function subpropertytypes()
    {
       return  $this->hasMany('App\subPropertytype');
    }

    public  function properties(){
        return $this->hasMany('App\Property');
    }
}
