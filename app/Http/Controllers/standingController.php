<?php

namespace App\Http\Controllers;

use App\standing;
use Illuminate\Http\Request;

class standingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return response(standing::all());
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
     * @param  \App\standing  $standing
     * @return \Illuminate\Http\Response
     */
    public function show(standing $standing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\standing  $standing
     * @return \Illuminate\Http\Response
     */
    public function edit(standing $standing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\standing  $standing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, standing $standing)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\standing  $standing
     * @return \Illuminate\Http\Response
     */
    public function destroy(standing $standing)
    {
        //
    }
}
