<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Customerinvoice;
use App\Customer;
use App\Offer;
use Illuminate\Http\Request;

class CustomerinvoiceController extends Controller
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
        if ($customers->count()==0){
            redirect()->route('customers');}
        $customerinvoices = Customerinvoice::all();
        return view('customerinvoices.index')->with('customerinvoices', $customerinvoices)
        ->with('customers', $customers)->with('offers', $offers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customers = Customer::all();
        $offers = Offer::all();
        if ($customers->count()==0){
            redirect()->route('customer.create');
        }

        return view('customerinvoices.create')->with('customers', $customers)
        ->with('offers', $offers);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $this->validate($request,[
            'payment_situation'=> 'required',
        ]);

        $customerinvoice = Customerinvoice::create([
            'payment_situation'=>$request->payment_situation,
            'customer_id'=> $request->customer_id,
            'offer_id'=> $request->offer_id,
        ]);

        return redirect()->route('customerinvoices');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customerinvoice  $customerinvoice
     * @return \Illuminate\Http\Response
     */
    public function show(Customerinvoice $customerinvoice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customerinvoice  $customerinvoice
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customers = Customer::all();
        $offers = Offer::all();
        $customerinvoice = Customerinvoice::find($id);
        return view('customerinvoices.edit')->with('customerinvoice', $customerinvoice)
        ->with('customers', $customers)->with('offers', $offers);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customerinvoice  $customerinvoice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $customerinvoice = Customerinvoice::find($id);
        // $this->validate($request,[
        //     'payment_situation'=> 'required',

        // ]);
        $customerinvoice->payment_situation = $request->payment_situation;

        $customerinvoice->save();

        return redirect()->route('customerinvoices');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customerinvoice  $customerinvoice
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customerinvoice = Customerinvoice::find($id);
        $customerinvoice->delete();
        return redirect()->route('customerinvoices');
    }
}
