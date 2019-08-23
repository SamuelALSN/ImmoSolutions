<?php


namespace App\Http\Controllers;

use App\Property;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder;

class WelcomeController extends Controller
{
    public function index()
    {
        $properties = Property::whereHas('assignment', function (Builder $query) {
            $query->where('status', '=', 1);
            //$query->orderBy('created_at','DESC');
        })->paginate(4);
        return view('guest.home', compact('properties'));
    }

    public function guestAuthentification()
    {
        return view('guest.auth.login');
    }

}
