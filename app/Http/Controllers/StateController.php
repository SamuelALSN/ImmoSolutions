<?php

namespace App\Http\Controllers;

use App\Model\Countries\state;
use Illuminate\Http\Request;

class StateController extends Controller
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
     * @param  \App\Model\Countries\state  $state
     * @return \Illuminate\Http\Response
     */
    //public function show(state $state)
    public function show($state)
    {
        $state=state::find($state);
        $Relatedcities = $state->cities;
        return response($Relatedcities);
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Countries\state  $state
     * @return \Illuminate\Http\Response
     */
    public function edit(state $state)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Countries\state  $state
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, state $state)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Countries\state  $state
     * @return \Illuminate\Http\Response
     */
    public function destroy(state $state)
    {
        //
    }
}
