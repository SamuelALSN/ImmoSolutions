<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class typeTransaction extends Model
{
    //
    protected $table='transaction_type';

    public function properties(){
        return $this->belongsToMany( 'App\Property','Transaction',
            'transactiontype_id',
            'property_id'
           );
    }

}
