<?php

namespace App\Http\Controllers;

use App\propertytype;
use Illuminate\Http\Request;

class PropertyTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return response(propertytype::all());
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\propertytype  $propertytype
     * @return \Illuminate\Http\Response
     */
    //public function show(propertytype $propertytype)
    public function show($propertytype)
    {
        $propertytype1 = propertytype::find($propertytype);
        $subPropertyType = $propertytype1->subpropertytypes;
        return response($subPropertyType);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\propertytype  $propertytype
     * @return \Illuminate\Http\Response
     */
    public function edit(propertytype $propertytype)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\propertytype  $propertytype
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, propertytype $propertytype)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\propertytype  $propertytype
     * @return \Illuminate\Http\Response
     */
    public function destroy(propertytype $propertytype)
    {
        //
    }
}
