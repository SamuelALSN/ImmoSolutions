<?php

namespace App\Http\Controllers;

use App\Property;
use App\User;
use Illuminate\Database\Eloquent\Builder;
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
                ->where('status', '=', 1)
                ->orderBy('updated_at')
                ->get();

//            $valid_res = DB::table("reserver")
//                ->select('created_at',DB::raw("COUNT(*) as count_row"))
//                ->orderBy("created_at")
//                ->groupBy(DB::raw("created_at"))
//                ->where('status','=',1)
//                ->get();


            $supervise = DB::table('assignment')->get();
            return view('home', compact('propertycount',
                'usercount', 'reservationcount',
                'supervise',
                'valid_res'
            ));
        } elseif ($user->hasrole('Agents')) {

            $agents_properties = Property::has('images')->whereHas('assignment', function (Builder $query) {
                $query->where('user_id', '=', Auth::user()->id);
                //$query->orderBy('created_at','DESC');
            })->get();

            $valid_properties = Property::has('images')->whereHas('assignment', function (Builder $query) {
                $query->where('user_id', '=', Auth::user()->id);
                $query->where('status', '=', 1);
                //$query->orderBy('created_at','DESC');
            })->get();


//            $properties_reserv = Property::has('assignment')->whereHas('reservation', function (Builder $query) {
//                //$query->where('assignment.user_id', '=', Auth::user()->id);
//                $query->where('status', '=', 1);
//                //$query->orderBy('created_at','DESC');
//            })->where('assignment.user_id','=',Auth::user()->id)
//                ->get();
//
//            dd($properties_reserv);

            $reserv_properties = DB::table('reserver')
                ->join('assignment', function ($join) {
                    $join->on('reserver.property_id', '=', 'assignment.property_id')
                        ->where('reserver.status', '=', 1)
                        ->where('assignment.user_id', '=', Auth::user()->id);
                })
                ->get();

            $ask_properties = DB::table('reserver')
                ->join('assignment', function ($join) {
                    $join->on('reserver.property_id', '=', 'assignment.property_id')
                        ->where('reserver.status', '=', 0)
                        ->where('assignment.user_id', '=', Auth::user()->id);
                })
                ->get();

            // dd($reserv_properties);
            return view('agent.home', compact('agents_properties', 'valid_properties', 'reserv_properties', 'ask_properties'));
        }

        //return view('guest.home');
        return redirect()->route('bienvenue');

    }


    /*
     * Static Section
     */

    public function Charts()
    {
        $valid_res = DB::table("reserver")
            ->select('created_at', DB::raw("COUNT(*) as count_row"))
            ->orderBy("created_at")
            ->groupBy(DB::raw("created_at"))
            ->where('status', '=', 1)
            ->get();

        $ask_res = DB::table("reserver")
            ->select('created_at', DB::raw("COUNT(*) as count_row"))
            ->orderBy("created_at")
            ->groupBy(DB::raw("created_at"))
            ->where('status', '=', 0)
            ->get();

        $cancel_res = DB::table("reserver")
            ->select('created_at', DB::raw("COUNT(*) as count_row"))
            ->orderBy("created_at")
            ->groupBy(DB::raw("created_at"))
            ->where('status', '=', 1)
            ->get();


        return response()->json($valid_res);
    }

    public function AllCharts()
    {

        $locality = DB::table('property')
            ->select('locality', DB::raw('COUNT(locality) AS occurrences'))
            ->groupBy('locality')
            ->orderBy('occurrences', 'DESC')
            ->get();

        $Scategories = DB::table('property')
            ->join('propertytype','property.propertytype_id','=','propertytype.id')
            ->select('propertytype.name','propertytype_id', DB::raw('COUNT(property.propertytype_id) AS occurrences'))
            ->groupBy('propertytype_id')
            ->orderBy('occurrences', 'DESC')
            ->get();
        $valid_res = DB::table("reserver")
            ->select('created_at', DB::raw("COUNT(*) as count_row"))
            ->orderBy("created_at")
            ->groupBy(DB::raw("created_at"))
            ->where('status', '=', 1)
            ->get();
       // dd($categories);
//        $base_categories = DB::table('propertytype')
//            ->select('propertytype.name')
//            ->joinSub($categories,'categories_label',function ($join){
//                 $join->on('propertytype.id','=','categories_label.propertytype_id');
//
//            })->get();
//        dd($base_categories);


        return view('admin.charts', compact('locality','Scategories','valid_res'));

    }
}
