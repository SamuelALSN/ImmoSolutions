<?php

namespace App\Http\Controllers;

use App\user;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use  Spatie\Permission\Models\Role;
use App\Traits\CaptureIpTrait;
use Validator;
use Response;

class UsersManagementController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $roles = Role::all();
        return view('usersmanagement.show-users', compact('users', "roles"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $roles = Role::all();

        $data = [
            'roles' => $roles,
        ];

        return view('usersmanagement.create-user')->with($data);

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
            'name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'country_id' => ['required', 'integer'],
            'role' => 'required',
        ]);

        if ($validator->fails()) {
            return Response::json(array(
                'errors' => $validator->getMessageBag()->toArray(),
            ));
        } else {
            $ipAdress = new CaptureIpTrait();
            $user = User::create([
                'name' => $request->name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'password' => $request->bcrypt($request->password),
                'country_id' => $request->$request->country_id,
                'activated' => 0,
                'signup_ip_address' => $request->$ipAdress->getClientIp(),
                //'created_at'=> Carbon::now(),
               // 'updated_at'=> Carbon::now(),
            ]);

            $user->assignRole($request->role);
            $user->save();
            return response()->json($user);
//
//            $data = new Data();
//            $data->name = $request->name;
//            $data->save();
            //return response()->json($data);

        }
    }

    /**
     * Display the specified resource.
     *
     * @param \App\user $user
     * @return \Illuminate\Http\Response
     */
    public function show(user $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\user $user
     * @return \Illuminate\Http\Response
     */
//    public function edit(user $user)
    public function edit($id)
    {
        //
        $user = User::findorFail($id);
        $roles = Role::all();

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\user $user
     * @return \Illuminate\Http\Response
     */
//    public function update(Request $request, user $user)
    public function update(Request $request, $id)
    {
        //
        $currentUser = Auth::user();
        $user = User::find($id);
        $emailCheck = ($request->input('email') != '') && ($request->input('email') != $user->email);
        $ipAddress = new CaptureIpTrait();

        if ($emailCheck) {
            $validator = Validator::make($request->all(), [
                'name'     => 'required|max:255|unique:users',
                'email'    => 'email|max:255|unique:users',
                'password' => 'present|confirmed|min:6',
            ]);
        } else {
            $validator = Validator::make($request->all(), [
                'name'     => 'required|max:255|unique:users,name,'.$id,
                'password' => 'nullable|confirmed|min:6',
            ]);
        }

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $user->name = $request->input('name');
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');

        if ($emailCheck) {
            $user->email = $request->input('email');
        }

        if ($request->input('password') != null) {
            $user->password = bcrypt($request->input('password'));
        }

        $userRole = $request->input('role');
        if ($userRole != null) {
            $user->detachAllRoles();
            $user->attachRole($userRole);
        }

        $user->updated_ip_address = $ipAddress->getClientIp();

        switch ($userRole) {
            case 3:
                $user->activated = 0;
                break;

            default:
                $user->activated = 1;
                break;
        }

        $user->save();

        return back()->with('success', trans('usersmanagement.updateSuccess'));



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\user $user
     * @return \Illuminate\Http\Response
     */
//    public function destroy(user $user)
    public function destroy($id)
    {


        $currentUser = Auth::user();
        $user = User::findorFail($id);
        $ipAdress = new CaptureIpTrait();
        if($user->id!= $currentUser->id){
            //$user->deleted_ip_adress = $ipAdress->getClientIp();
            $user->save();
            $user->delete();
            return response()->json($user->id);
        }

         return response()->json([ 'errors' => 'suppression impossible']);

    }

    // show user related to agents role

    public function  showAgents(){
        $userAgents = User::role('Agents')->get();
        return response()->json($userAgents);
    }
}
