<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    //
    protected $table ='transaction';

    protected  $fillable = [
      'property_id',
        'ammount',
        'transactiontype_id',
        'beginDate',
        'endDate',
        'visiteDate',
        'majoration',
        'intervalMajoration'
    ];

}
