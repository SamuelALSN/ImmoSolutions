<?php

namespace App\Http\Controllers;

use App\Property;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Session;
use Stripe\Charge;
use Stripe\Stripe;

class PaiementController extends Controller
{
    //
    public function Process($id, $montant)
    {
        return view('guest.plans.show', compact('id', 'montant'));

    }

    public function Charge(Request $request)
    {
        //dd($request->all());
        $properties = Property::whereHas('reservation', function (Builder $query) {
            $query->where('user_id', '=', Auth::user()->id);
//            $query->where('status', '=', 1);
        })->get();

        Stripe::setApiKey('sk_test_KJddUc2VYytgy53PvlPgDCUk00l0l9LzRR');
        $charge = Charge::create(
            array(
                "amount" => $request->price * 100,
                "source" => $request->stripeToken,
                "currency" => "usd",
                "description" => 'Paiement réservation',
                'receipt_email' => Auth::user()->email
            )
        );
        if ($charge) {
            DB::table('reserver')
                ->where('id', $request->reserv_id)
                ->update(['status' => 1]);
        }
        $property_id = DB::table('reserver')
            ->where('id', $request->reserv_id)->select('property_id')->get();
        // update property reserved and put out from list
        Property::where('id', $property_id[0]->property_id)
            ->update(['activated' => 1]);
        //Session::flash('success', 'Payment éffecté avec succès !');
//        Auth::user()->newSubscription('plan name', 'plan-id')->create($request->stripeToken, [
//            'email' => Auth::user()->email,
//        ]);

        return redirect('/reserver')->with('success', 'Paiement Effectué avec succès');
    }
}
