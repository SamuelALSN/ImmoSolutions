<?php

namespace App\Http\Controllers;

use App\Property;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

class searchController extends Controller
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if (!empty($request->adresse)) {
            $properties = Property::whereHas('assignment', function (Builder $query) use ($request) {
                $query->where('adresse', 'like', '%' . $request->adresse . '%');
            })->get();

            return $properties;
        } elseif (!empty($request->adresse) && (!empty($request->categorie))
            && (!empty($request->area)) && (!empty($request->rooms)) && (!empty($request->bathRooms))) {
            $properties = Property::whereHas('assignment', function (Builder $query) use ($request) {
                $query->where('adresse', 'like', '%' . $request->adresse . '%');
//            $query->where('route', 'like', '%' . $request->route . '%');
//            $query->where('locality', 'like', '%' . $request->locality . '%');
//            $query->where('administrative_area_level_1', 'like', '%' . $request->region . '%');
//            $query->where('country', 'like', '%' . $request->country . '%');
                $query->where('propertytype_id', '=', $request->categorie);
                $query->where('area', '=', $request->area);
                $query->where('rooms', '=', $request->rooms);
                $query->where('bathRooms', '=', $request->bathRooms);
            })->get();
            return $properties;
        } elseif (!empty($request->status)) {
//            $properties = Property::whereHas('assignment', function (Builder $query) use ($request) {
//                $query->where('adresse', 'like', '%' . $request->adresse . '%');
//                $query->where('area', '=', $request->area);
//                $query->where('rooms', '=', $request->rooms);
//                $query->where('bathRooms', '=', $request->bathRooms);
//            })->get();
            $properties = Property::whereHas('typetransactions', function (Builder $query) use ($request) {
                $query->where('transactiontype_id', '=', $request->status);
            })->get();
            return $properties;
        } elseif (empty($request->area)) {
            $properties = Property::whereHas('assignment', function (Builder $query) use ($request) {
                $query->where('adresse', 'like', '%' . $request->adresse . '%');
                $query->where('propertytype_id', '=', $request->categorie);
                $query->where('rooms', '=', $request->rooms);
                $query->where('bathRooms', '=', $request->bathRooms);
            })->get();
            return $properties;
        } elseif (!empty($request->status)) {
            dd($request->status);
            $properties = Property::whereHas('typetransactions', function (Builder $query) use ($request) {
                $query->where('transactiontype_id', '=', $request->status);
            })->get();
            return $properties;
        } elseif (!empty($request->categorie)) {
            $properties = Property::whereHas('assignment', function (Builder $query) use ($request) {
                $query->where('property_id', '=', $request->categorie);
            })->get();
            return $properties;
        }
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
