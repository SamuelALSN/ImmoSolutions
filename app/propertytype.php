<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class propertytype extends Model
{
    //
    use Searchable;

   protected $table = 'propertytype';

    public function searchableAs()
    {
        return 'propertytypes_index';
    }

    public function toSearchableArray()
    {
        $array = $this->toArray();

        // Customize array...

        return $array;
    }

    public function subpropertytypes()
    {
       return  $this->hasMany('App\subPropertytype');
    }

    public  function properties(){
        return $this->hasMany('App\Property');
    }
}
