<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class standing extends Model
{
    //
    use Searchable;
    protected $table='standing';

    public function searchableAs()
    {
        return 'standings_index';
    }

    public function toSearchableArray()
    {
        $array = $this->toArray();

        // Customize array...

        return $array;
    }
    public  function properties(){
        return $this->hasMany('App\Property');
    }
}
