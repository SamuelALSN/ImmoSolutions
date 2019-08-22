<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Property;
use Illuminate\Support\Facades\DB;
use Validator;

class ReserverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $property = Property::find($request->property_id);
        return view('reservemanagement.reserver',compact('property'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make($request->all(), [
            'beginDate' => 'required|date|after:tomorrow',
            'endDate' => 'required|date|after:beginDate',
            'comment' => 'required|string',
        ]);

        $property = Property::find($request->property_id);
        $property->typetransactions()->beginDate;
        $property->typetransactions()->endDate;
        $property->typetransactions()->visiteDate;
        if ($validator->passes()) {
            $reservation_id = DB::table('reserver')
                ->insertGetId(
                    ['user_id'=>Auth::user()->id,
                        'property_id'=>$request->property_id,
                        'comment' => $request->comment,
                        'coming_at' => $request->beginDate,
                        'going_at' => $request->endDate,
                        'status' => 0,
                        'created_at'=>Carbon::now()
                    ]
                );

            // update property
            if($reservation_id){
                $update_property = Property::find($request->property_id);
                $update_property->status=2;
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
}
