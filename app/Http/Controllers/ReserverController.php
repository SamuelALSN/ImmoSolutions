<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Property;
use Illuminate\Support\Facades\DB;
use Validator;
use Illuminate\Database\Eloquent\Builder;

class ReserverController extends Controller
{
    public function __construct()
    {
        $this->middleware('guestUser', ['only' => ['create']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     */
    public function index()
    {
        //$users = App\User::popular()->active()->orderBy('created_at')->get();

        //dd($properties);

        if(Auth::check()){
            if (Auth::user()->hasrole('Admin')) {
                $properties = Property::whereHas('reservation')->get();
                return view('reservemanagement.reservation', compact('properties'));

            } else if (Auth::user()->hasrole('Agents')) {
                $properties = Property::has('reservation')->whereHas('assignment', function (Builder $query) {
                    $query->where('user_id', '=', Auth::user()->id);
                })->get();
                return view('agent.reservemanagement.reservation', compact('properties'));
            } else if (Auth::user()->hasrole('customer')) {
                $properties = Property::whereHas('reservation', function (Builder $query) {
                    $query->where('user_id', '=', Auth::user()->id);

                })->paginate(4);
                //dd($properties);
                return view('reservemanagement.reserver-all', compact('properties'));
            }
        }else{
            return redirect()->route('login');
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $property = Property::find($request->property_id);
        return view('guest.customer.properties-details', compact('property'));
    }

    public function create_reservation(Request $request)
    {
        $property = Property::find($request->property_id);
        return view('reservemanagement.reserver', compact('property'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $validator = Validator::make($request->all(), [
            'beginDate' => 'required|date',
            'endDate' => 'required|date|after:beginDate',
            'comment' => 'string',
        ]);

        $property = Property::find($request->property_id);
        if ($validator->passes()) {
            $reservation_id = DB::table('reserver')
                ->insertGetId(
                    ['user_id' => Auth::user()->id,
                        'property_id' => $request->property_id,
                        'comment' => $request->comment,
                        'coming_at' => $request->beginDate,
                        'going_at' => $request->endDate,
                        'status' => 0,
                        'created_at' => Carbon::now()
                    ]
                );

            // update property
            if ($reservation_id) {
                $update_property = Property::find($request->property_id);
                $update_property->activated = 2;
                $update_property->save();
            }
            return response()->json([
                'id' => $reservation_id,
                'success' => 'ReservationComplete Ajouté'
            ]);
        }
        return response()->json(['error' => $validator->errors()->all()]);

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function reserverPayer()
    {
        if (Auth::user()->hasrole('Admin')) {
            $properties = Property::whereHas('reservation', function (Builder $query) {
                $query->where('stauts', '=', 1);
            })->get();
            return view('reservemanagement.reservation', compact('properties'));

        } else if (Auth::user()->hasrole('Agents')) {
            $properties = Property::has('reservation')->whereHas('assignment', function (Builder $query) {
                $query->where('user_id', '=', Auth::user()->id);
                $query->where('status', '=', 1);
            })->get();
            return view('agent.reservemanagement.reservation', compact('properties'));
        } else if (Auth::user()->hasrole('customer')) {
            $properties = Property::whereHas('reservation', function (Builder $query) {
                $query->where('user_id', '=', Auth::user()->id);
            })->paginate(4);
            return view('reservemanagement.reserver-all', compact('properties'));
        }
    }

    /*
     * view for uncompleted reservations
     */

    public function uncompleteReservation()
    {
        $properties = Property::whereHas('reservation', function (Builder $query) {
            $query->where('user_id', '=', Auth::user()->id);
            $query->whereNotNull('visite_at');
            $query->where('status', '=', 0);

        })->get();
        // dd($properties);
        return view('reservemanagement.reservation-ask', compact('properties'));
    }

    public function ConfirmVisite($reservation_id)
    {
        return DB::table('reserver')
            ->where('id', $reservation_id)
            ->update(['status' => 2]);
    }
}
