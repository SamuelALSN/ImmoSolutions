<?php

namespace App\Http\Controllers;

use App\Property;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        if ($user->hasrole('Admin')) {
            $propertycount = Property::all()->count();
            $usercount = User::all()->count();
            $reservationcount = DB::table('reserver')
                ->where('status', '=', 1)->get();
            $supervise = DB::table('assignment')->get();
            return view('home', compact('propertycount', 'usercount', 'reservationcount','supervise'));
        } elseif ($user->hasrole('Agents')) {
            return view('agent.home');
        }

        //return view('guest.home');
        return redirect()->route('bienvenue');

    }


    /*
     * Static Section
     */

    public function  Charts(){
        $reservation =   $reservationcount = DB::table('reserver')
            ->where('status', '=', 1)->get();
        return response()->json($reservation);
    }
}
