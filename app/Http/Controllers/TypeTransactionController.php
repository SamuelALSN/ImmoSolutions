<?php

namespace App\Http\Controllers;

use App\typeTransaction;
use Illuminate\Http\Request;

class TypeTransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return response(typeTransaction::all());
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
     * @param  \App\typeTransaction  $typeTransaction
     * @return \Illuminate\Http\Response
     */
    public function show(typeTransaction $typeTransaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\typeTransaction  $typeTransaction
     * @return \Illuminate\Http\Response
     */
    public function edit(typeTransaction $typeTransaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\typeTransaction  $typeTransaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, typeTransaction $typeTransaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\typeTransaction  $typeTransaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(typeTransaction $typeTransaction)
    {
        //
    }
}
