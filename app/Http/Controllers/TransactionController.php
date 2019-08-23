<?php

namespace App\Http\Controllers;

use App\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Validator;

class TransactionController extends Controller
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
        //dd($request->all());

        $validator = Validator::make($request->all(), [
            'beginDate' => 'required|date|after:tomorrow',
            'endDate' => 'required|date|after:beginDate',
            'visiteDate' => 'required|date|before:beginDate',
            'ammount' => 'required|integer',
        ]);

        if ($validator->passes()) {
            $propertyTransaction = Transaction::create([
                'property_id' => $request->property,
                'transactiontype_id' => $request->typetransaction,
                'beginDate' => $request->beginDate,
                'endDate' => $request->endDate,
                'visiteDate' => $request->visiteDate,
                'ammount' => $request->ammount,
                'activated' => 0,
            ]);
            $propertyTransaction->save();
            return response()->json([
                'success' => 'Enregistrement Effectué'
            ]);
        }

        return response()->json(['error' => $validator->errors()->all()]);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Transaction $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(Transaction $transaction)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Transaction $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Transaction $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //dd($request->all());
        $validator = Validator::make($request->all(), [
            'beginDate' => 'required|date|after:tomorrow',
            'endDate' => 'required|date|after:beginDate',
            'visiteDate' => 'required|date|before:beginDate',
            'ammount' => 'required|integer',
        ]);

        if ($validator->passes()) {
           // $propertyTransaction =

                Transaction::where('property_id', $request->property)
               // ->where('transaction_type_id', $request->typetransaction)
                ->update([
                    'transactiontype_id' => $request->typetransaction,
                    'beginDate' => $request->beginDate,
                    'endDate' => $request->endDate,
                    'visiteDate' => $request->visiteDate,
                    'ammount' => $request->ammount,
                    'activated' => 0,
                    'updated_at'=>Carbon::now(),
                ]);
            return response()->json([
                'success' => 'Mise à jour Effectué'
            ]);
        }

        return response()->json(['error' => $validator->errors()->all()]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Transaction $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaction $transaction)
    {
        //
    }
}
