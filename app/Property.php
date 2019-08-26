<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Property extends Model
{
    //

    use Searchable;
    public $timestamps = true;
    protected $table = 'property';

    public function searchableAs()
    {
        return 'properties_index';
    }

    public function toSearchableArray()
    {
        $array = $this->toArray();

        // Customize array...

        return $array;
    }

    public function images()
    {
        return $this->hasMany('App\Image');
    }

    public function standing()
    {
        return $this->belongsTo('App\standing');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function propertytype()
    {
        return $this->belongsTo('App\propertytype');
    }

    public function typetransactions()
    {
        return $this->belongsToMany('App\typeTransaction',
            'Transaction',
            'property_id',
            'transactiontype_id')
            ->withPivot('ammount', 'beginDate', 'endDate', 'visiteDate')
            ->withTimestamps();
    }

    public function  assignment(){
        return $this->belongsToMany('App\User',
            'assignment',
            'property_id',
            'user_id')
            ->withPivot('comment','status','verification_begin','verification_ended')
            ->withTimestamps();
    }

    public function  reservation(){
        return $this->belongsToMany('App\User',
            'reserver',
            'property_id',
            'user_id')
            ->withPivot('comment','status','coming_at','going_at')
            ->withTimestamps();
    }
}
