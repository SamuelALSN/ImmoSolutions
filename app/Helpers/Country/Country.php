<?php


namespace App\Helpers\Country;
use App\Model\countries\country as countries;

class Country
{

    public  static function getCountries(){
     $country = countries::select('id','code','name','phonecode','currencies')->get();
     return $country;

    }
}
