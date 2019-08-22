<?php


namespace App\Http\Controllers;

use App\Property;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    public function index()
    {
        $properties =  Property::all();
//        $properties = DB::table('assignment')
//            ->join('property', 'assignment.property_id',
//                '=', 'property.id')
//            ->join('users','assignment.user_id',
//                '=','users.id')
//            ->join('image','assignment.property_id',
//                '=','image.property_id')
//            ->select('property.*',DB::raw('select'))
//            ->where('status', '=', 1)
//            ->groupBy('assignment.property_id')->get();
        //dd($properties);
        return view('guest.home', compact('properties'));
    }

    public function guestAuthentification(){
        return view('guest.auth.login');
    }

}
