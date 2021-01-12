<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Offer;
use App\Recette;
use App\Marketer;
use Illuminate\Http\Request;

class RecetteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::all();
        $offers = Offer::all();
        $recettes = Recette::all();
        return view('receipts.index')->with('recettes', $recettes)
        ->with('customers', $customers)->with('offers', $offers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $marketers = Marketer::all();
        $customers = Customer::all();
        $offers = Offer::all();

        return view('receipts.create')->with('marketers', $marketers)
        ->with('customers', $customers)-> with('offers', $offers);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'customer_id'=> 'required',
            'offer_id'=> 'required',
            'marketer_id'=> 'required',
        ]);

        $marketer_first = 0.1 * $request->first;
        $marketer_second = 0.1 * $request->second;
        $marketer_third = 0.1 * $request->third;

        Recette::create([
            'customer_id'=> $request->customer_id,
            'offer_id'=> $request->offer_id,
            'first'=> $request->first,
            'second'=> $request->second,
            'third'=> $request->third,
            'marketer_id'=> $request->marketer_id,
            'marketer_first'=> $marketer_first,
            'marketer_second' => $marketer_second,
            'marketer_third' => $marketer_third,
        ]);

        return redirect()->route('receipts');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Recette  $recette
     * @return \Illuminate\Http\Response
     */
    public function show(Recette $recette)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Recette  $recette
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $marketers = Marketer::all();
        $customers = Customer::all();
        $offers = Offer::all();

        $recette = Recette::find($id);

        return view('receipts.edit')->with('recette', $recette)
        ->with('marketers', $marketers)->with('customers', $customers)
        ->with('offers', $offers);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Recette  $recette
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $recette = Recette::find($id);

        $marketer_first = 0.1 * $request->first;
        $marketer_second = 0.1 * $request->second;
        $marketer_third = 0.1 * $request->third;

        $recette->customer_id = $request->customer_id;
        $recette->offer_id = $request->offer_id;
        $recette->first = $request->first;
        $recette->second = $request->second;
        $recette->third = $request->third;
        $recette->marketer_id = $request->marketer_id;
        $recette->marketer_first = $marketer_first;
        $recette->marketer_second = $marketer_second;
        $recette->marketer_third = $marketer_third;

        $recette->save();
        return redirect()->route('receipts');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Recette  $recette
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $recette = Recette::find($id);
        $recette->delete();
        return redirect()->route('receipts');
    }
}
