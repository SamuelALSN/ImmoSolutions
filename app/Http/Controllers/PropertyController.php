<?php

namespace App\Http\Controllers;

use App\Notifications\UsersNotification;
use App\Property;
use App\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Notification;
use Validator;

//use PhpParser\Builder;
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

        $this->middleware('guestUser', ['only' => ['create']]);
    }

    public function index()
    {
        //
        if (Auth::check()) {
            if (Auth::user()->hasrole('Admin')) {
                $properties = Property::has('typetransactions')
                    ->whereDoesntHave('assignment')
                    ->orderBy('created_at','desc')
                    ->get();
                //dd($properties);
                return view('propertiesmanagement.show-properties', compact('properties'));
            } elseif (Auth::user()->hasrole('Agents')) {
                $agent_id = Auth::user()->id;
                $users_agent = User::find($agent_id);
                return view('agent.propertiesmanagement.show-properties', compact('users_agent'));
            } elseif (Auth::user()->hasrole('customer')) {

            }
        } else {
            return redirect()->route('login');
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
                        'country' => $request->input('country'),
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
    public function edit(Request $request)
    {
        //
//        dd($request->hasFile('filename'));
//        if ($request->hasfile('filename')) {
//
//            foreach ($request->file('filename') as $file) {
//                $name = $file->getClientOriginalName();
//                $file->move(public_path() . '/files/', $name);
//                $data[] = $name;
//            }
//        }
//
//        $file = new Image();
//        $file->filename = json_encode($data);
//
//
//        $file->save();

        //dd($request->all());
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
            // 'filename' => 'required',
            // 'filename.*' => 'mimes:jpg,png,jpeg'
        ]);

        $user_id = Auth::user()->id;
        if ($validator->passes()) {
            $id = DB::table('property')
                ->where('id', $request->input('property_id'))
                ->update(
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
                        'country' => $request->input('country'),
                        'docfile' => $request->input('docfile'),
                        'rooms' => $request->input('room'),
                        'bathRooms' => $request->input('bathroom'),
                        'garages' => $request->input('garage'),
                        'swimmingpool' => $request->input('piscine'),
                        'meuble' => $request->input('meuble'),
                        'standing_id' => $request->input('standing'),
                        //'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ]

                );
            return response()->json([
                'id' => $id,
                'success' => 'Bien Modifié avec success'
            ]);
        }

        return response()->json(['error' => $validator->errors()->all()]);
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

    public function ShowValidProperty()
    {
        $properties = Property::has('typetransactions')->whereHas('assignment')->get();
        //dd($properties);
        return view('propertiesmanagement.show-valid-properties', compact('properties'));

    }

    public function customerproperty()
    {
        $properties = Property::where(
            'user_id', Auth::user()->id)
            //->where('activated', 0)
            ->paginate(6);
        //dd($properties);
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
        } elseif (Auth::user()->hasrole('customer')) {
            $userAgents = User::role('Agents')->get();
            $property = Property::find($id);
            return view('propertiesmanagement.one-property', compact('property', 'userAgents'));
        }

    }

    /*
     * function to validate property
     */
    public function validateproperty($property_id)
    {
        $agents = User::find(Auth::user()->id);

        if ($agents->assignproperty->contains($property_id)) {
            $agents->assignproperty()->updateExistingPivot($property_id, ['status' => 1,
                'verification_begin' => Carbon::now()], false);
        } else {
            return Response()->json(['erreur' => 'Agent pas affecté à ce bien ']);
        }

        return response()->json(['array' => 'succes']);

    }

    public function details($property_id)
    {
        $property = Property::find($property_id);
        return view('guest.customer.user-properties-details', compact('property'));
    }

    public function visiteNotify($reservation_id, $visite_at)
    {
        // get user  object  who demands for property
        $user = DB::table('reserver')
            ->where('id', $reservation_id)->select('user_id')->get();
        $usermail = User::find($user[0]->user_id);
        // define visitedate
        $defineVisite = DB::table('reserver')
            ->where('id', $reservation_id)
            ->update([
                'visite_at' => $visite_at,
                'notification_at'=>Carbon::now(),
            ]);
        $details = [
            'greeting' => 'Mail Envoyé par ImmoSolutions ',
            'body' => 'Voici Votre Date de Visite ===>' . $visite_at . '<=====',
            'thanks' => 'Merci pour votre Confiance ',
            'actionText' => 'Veuillez confirmer la date afin d effectuer la visite',
            'actionURL' => url('reservation-uncomplete'),
            'order_id' => 101
        ];
        Notification::send($usermail, new UsersNotification($details));
        //dd('no');
    }


    public function AdminPublishedProperty(){
        $properties = Property::has('images')->whereHas('assignment', function (Builder $query) {
            $query->where('status', '=', 1);
           // $query->where('property.activated','<>',1);
            //$query->orderBy('created_at','DESC');
        })->get();
        return view('propertiesmanagement.show-published-properties',compact('properties'));

    }

    public function  UserPropertiesUpdate(){

        return view('guest.customer.user-properties-update');
    }


}
