<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Transaction extends Model
{
    //
    use Searchable;

    public function searchableAs()
    {
        return 'transactions_index';
    }

    public function toSearchableArray()
    {
        $array = $this->toArray();

        // Customize array...

        return $array;
    }

    protected $table = 'transaction';

    protected $fillable = [
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
