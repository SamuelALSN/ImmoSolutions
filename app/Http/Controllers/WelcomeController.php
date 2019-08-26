<?php


namespace App\Http\Controllers;

use App\Property;
use App\propertytype;
use App\typeTransaction;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $properties = Property::has('images')->whereHas('assignment', function (Builder $query) {
            $query->where('status', '=', 1);
            //$query->orderBy('created_at','DESC');
        })->paginate(4);
        $typebiens = propertytype::all();
        $typetrans = typeTransaction::all();
        return view('guest.home', compact('properties','typebiens','typetrans'));
    }

    public function search(Request $request)
    {
        return Property::search($request->search)->get();
    }

    public function guestAuthentification()
    {
        return view('guest.auth.login');
    }

}
