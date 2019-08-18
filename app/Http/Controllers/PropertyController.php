<?php

namespace App\Http\Controllers;

use App\Property;
use App\standing;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use function Sodium\compare;
use Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $destinationPath;

    public function __construct()
    {
        $this->destinationPath = public_path('/storage/document');
    }

    public function index()
    {
        //
        if (Auth::user()->hasrole('Admin')) {
            $properties = Property::all();
            return view('propertiesmanagement.show-properties', compact('properties'));
        } elseif (Auth::user()->hasrole('Agents')) {
            $agent_id = Auth::user()->id;
            $users_agent = User::find($agent_id);
            return view('agent.propertiesmanagement.show-properties', compact('users_agent'));
        }


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('guest.sample.submit-property2');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //  dd($request->all());
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'description' => 'nullable|string|max:255',
            'area' => 'required|max:255',
            'buildingdate' => 'date',
            'latitudeposition' => 'required|numeric',
            'longitudeposition' => 'required|numeric',
            'propertytype_id' => 'required|integer',
            'street_number' => 'nullable',
            'adresse' => 'nullable',
            'route' => 'nullable',
            'locality' => 'required|max:255',
            'administrative_area_level_1' => 'nullable',
            'postal_code' => 'nullable',
            'country' => 'required',
            'docfile.*' => 'mimes:pdf',
        ]);

        $user_id = Auth::user()->id;
        if ($validator->passes()) {
//            dd($request->input('docfile'));
//            $document = $request->input('docfile');
//
//            $request->file('docfile')->move($this->destinationPath);
            $id = DB::table('property')
                ->insertGetId(
                    ['user_id' => $user_id,
                        'name' => $request->input('name'),
                        'description' => $request->input('description'),
                        'area' => $request->input('area'),
                        'buildingdate' => $request->input('buildingdate'),
                        'latitudeposition' => $request->input('latitudeposition'),
                        'longitudeposition' => $request->input('longitudeposition'),
                        'adresse' => $request->input('adresse'),
                        'propertytype_id' => $request->input('propertytype_id'),
                        'street_number' => $request->input('street_number'),
                        'route' => $request->input('route'),
                        'locality' => $request->input('locality'),
                        'administrative_area_level_1' => $request->input('administrative_area_level_1'),
                        'postal_code' => $request->input('postal_code'),
                        'docfile' => $request->input('docfile'),
                        'rooms' => $request->input('room'),
                        'bathRooms' => $request->input('bathroom'),
                        'garages' => $request->input('garage'),
                        'swimmingpool' => $request->input('piscine'),
                        'meuble' => $request->input('meuble'),
                        'standing_id' => $request->input('standing'),
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ]

                );
            return response()->json([
                'id' => $id,
                'success' => 'Bien Créé'
            ]);
        }

        return response()->json(['error' => $validator->errors()->all()]);


    }

    /**
     * Display the specified resource.
     *
     * @param \App\Property $property
     * @return \Illuminate\Http\Response
     */
    public function show(Property $property)
    {
        //
        $property = Property::find($property);

        return $property;

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Property $property
     * @return \Illuminate\Http\Response
     */
    public function edit(Property $property)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Property $property
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Property $property)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Property $property
     * @return \Illuminate\Http\Response
     */
    public function destroy(Property $property)
    {
        //
    }

    /*
     * show authenticade user properties
     */

    public function customerproperty()
    {
        $properties = Property::where(
            'user_id', Auth::user()->id)
            ->where('activated', 0)
            ->paginate(5);

        return view('guest.customer.user-properties', compact('properties'));
    }

    /*
    * show a customer property detail and user with agent role for the admin to assignment
    */

    public function showcustomerproperty($id)
    {
        if (Auth::user()->hasrole('Admin')) {

            $userAgents = User::role('Agents')->get();
            $property = Property::find($id);
            return view('propertiesmanagement.one-property', compact('property', 'userAgents'));

        } elseif (Auth::user()->hasrole('Agents')) {
            $property = Property::find($id);
            return view('agent.propertiesmanagement.one-property', compact('property'));
        }


    }
}
