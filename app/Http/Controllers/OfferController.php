<?php

namespace App\Http\Controllers;

use App\Offer;
use App\Service;
use App\Customer;
use App\Equipment;
use App\Subservice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use charlieuki\ReceiptPrinter\ReceiptPrinter;


class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offers = Offer::all();
        return view('offers.index')->with('offers', $offers);
    }

    public function html_email(Request $request, $id) {
        $offer = Offer::find($id);
        $data = ['customer_id'=> $offer->customer->name,
        'rfq'=> $offer->rfq,
        'conditionn'=> $offer->conditionn,
        'offer_date'=> $offer->offer_date,
        'valid_date'=> $offer->valid_date,
        'discount'=> $offer->discount,
        'total'=> $offer->total];
        // $data = array('name'=>"raghad alkadi");
        Mail::send('offers.mail', $data, function($message) {
           $message->to('coolkoki8@gmail.com')->subject
              ('The offer');
              $message->embed(public_path() . '/logo/logo.png');
        });
        echo "Offer Sent";
        // return view('offers.mail')->with('data', $data)->with('equipments', $equipments)
        // ->with('services', $services)->with('customers', $customers)
        // ->with('subservices', $subservices);
     }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $equipments = Equipment::all();
        $services = Service::all();
        $customers = Customer::all();
        $subservices = Subservice::all();

        return view('offers.create')->with('equipments', $equipments)
        ->with('services', $services)->with('customers', $customers)
        ->with('subservices', $subservices);
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
            'info'=> 'required | image',

        ]);

        $info = $request->info;
        $newInfo = time().$info->getClientOriginalName();
        $info->move('public/logo/', $newInfo);

        Offer::create([
            'equipment_id'=>$request->equipment_id,
            'customer_id'=>$request->customer_id,

            'info'=>'public/logo/'.$newInfo,
            'rfq'=>$request->rfq,
            'conditionn'=>$request->conditionn,
            'service_id'=>$request->service_id,
            'subservice_id'=>$request->subservice_id,
            'offer_date'=>$request->offer_date,
            'valid_date'=>$request->valid_date,
            'discount'=>$request->discount,
            'total'=>$request->total,
            'totale'=>$request->totale,
            'totals'=>$request->totals,
            'external'=>$request->external
        ]);
        return redirect()->route('offers');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function show(Offer $offer)
    {
        //
    }

    public function offerget($id)
    {
        $offers = Offer::where('customer_id',$id)->get();
        return $offers;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $equipments = Equipment::all();
        $services = Service::all();
        $customers = Customer::all();
        $subservices = Subservice::all();

        $offer = Offer::find($id);

        return view('offers.edit')->with('offer', $offer)
        ->with('equipments', $equipments)->with('services', $services)
        ->with('customers', $customers)->with('subservices', $subservices);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $offer = Offer::find($id);
        if ($request->has('info')){
            $info = $request->info;
            $newInfo = time().$info->getClientOriginalName();
            $info->move('public/logo/', $newInfo);
            $offer->info = 'public/logo/'.$newInfo;
        }

        $offer->customer_id = $request->customer_id;
        $offer->equipment_id = $request->equipment_id;
        $offer->service_id = $request->service_id;
        $offer->subservice_id = $request->subservice_id;
        $offer->offer_date = $request->offer_date;
        $offer->valid_date = $request->valid_date;
        $offer->discount = $request->discount;
        $offer->rfq = $request->rfq;
        $offer->total = $request->total;
        $offer->totale = $request->totale;
        $offer->totals = $request->totals;
        $offer->external = $request->external;
        $offer->save();

        return redirect()->route('offers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $offer = Offer::find($id);
        $offer->delete();
        return redirect()->route('offers');
    }

    public function print($id)
    {
        $offer = Offer::find($id);

        $data = ['customer_id'=> $offer->customer->name,
        'rfq'=> $offer->rfq,
        'conditionn'=> $offer->conditionn,
        'offer_date'=> $offer->offer_date,
        'valid_date'=> $offer->valid_date,
        'discount'=> $offer->discount,
        'total'=> $offer->total];

        return view('offers.print')->with('data', $data);

// $printer = new ReceiptPrinter();
// $printer->init(
//     config('receiptprinter.connector_type'),
//     config('receiptprinter.connector_descriptor')
// );

// $printer->printReceipt();
    }
}
