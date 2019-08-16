<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    //
    public $timestamps = true;
    protected $table = 'property';


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
}
