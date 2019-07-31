<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        //$user->roles->each(function($user_role) {});
        //$role = $user->getRoleNames();

        $user = Auth::user();
        if ($user->hasrole('super-admin')) {
            return view('home');
        } elseif ($user->hasrole('moderator')) {
            return view('moderator.home');
        }

        return view('guest.home');

    }
}
