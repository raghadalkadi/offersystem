<?php

namespace App\Http\Controllers;

use App\Serviceprice;
use App\Contract;
use App\Service;
use App\Marketer;
use App\Salesmanager;
use Illuminate\Http\Request;

class ServicepriceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $serviceprices = Serviceprice::all();
        return view('serviceprices.index')->with('serviceprices', $serviceprices);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services = Service::all();
        if ($services->count()==0){
            redirect()->route('service.create');
        }
        $marketers = Marketer::all();
        if ($marketers->count()==0){
            redirect()->route('marketer.create');
        }
        $contracts = Contract::all();
        if ($contracts->count()==0){
            redirect()->route('contract.create');
        }
        $salesmanagers = Salesmanager::all();
        if ($salesmanagers->count()==0){
            redirect()->route('salesmanager.create');
        }
        return view('serviceprices.create')->with('services', $services)
        ->with('marketers', $marketers)->with('contracts', $contracts)
        ->with('salesmanagers', $salesmanagers);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request,[
        //     'service_id'=> 'required',
        //     'price'=> 'required',
        //     'rate'=> 'required',
        //     'marketer_id'=> 'required',
        //     'salesmanager_id'=> 'required',

        // ]);
        $price_sy = $request->price * $request->rate;
        $marketer_total = 0.1 * $price_sy;
        $contract_total = 0.1 * $price_sy;
        $marketing_total = $marketer_total + $contract_total;
        $market_total = $marketer_total;
        $salesmanager_total = 0.1 * ($price_sy - $marketing_total);

        Serviceprice::create([
            'service_id'=> $request->service_id,
            'price'=> $request->price,
            'rate'=> $request->rate,
            'price_sy'=> $price_sy,
            'marketer_id'=> $request->marketer_id,
            'marketer_total'=> $marketer_total,
            'contract_id' => $request->contract_id,
            'contract_total' => $contract_total,
            'marketing_total'=> $marketing_total,
            'market_total' => $market_total,
            'salesmanager_id'=> $request->salesmanager_id,
            'salesmanager_total'=> $salesmanager_total,
        ]);

        return redirect()->route('serviceprices');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Serviceprice  $serviceprice
     * @return \Illuminate\Http\Response
     */
    public function show(Serviceprice $serviceprice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Serviceprice  $serviceprice
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $services = Service::all();
        if ($services->count()==0){
            redirect()->route('service.create');
        }
        $marketers = Marketer::all();
        if ($marketers->count()==0){
            redirect()->route('marketer.create');
        }
        $contracts = Contract::all();
        if ($contracts->count()==0){
            redirect()->route('contract.create');
        }
        $salesmanagers = Salesmanager::all();
        if ($salesmanagers->count()==0){
            redirect()->route('salesmanager.create');
        }
        $serviceprice = Serviceprice::find($id);
        return view('serviceprices.edit')->with('serviceprice', $serviceprice)->with('services', $services)
        ->with('marketers', $marketers)->with('contracts', $contracts)
        ->with('salesmanagers', $salesmanagers);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Serviceprice  $serviceprice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $serviceprice = Serviceprice::find($id);
        $this->validate($request,[
            'service_id'=> 'required',
            'price'=> 'required',
            'rate'=> 'required',
            'marketer_id'=> 'required',
            'salesmanager_id'=> 'required',

        ]);
        $price_sy = $request->price * $request->rate;
        $marketer_total = 0.1 * $price_sy;
        $contract_total = 0.1 * $price_sy;
        $marketing_total = $marketer_total + $contract_total;
        $market_total = $marketer_total;
        $salesmanager_total = 0.1 * ($price_sy - $marketing_total);

        $serviceprice->service_id = $request->service_id;
        $serviceprice->price= $request->price;
        $serviceprice->rate= $request->rate;
        $serviceprice->price_sy= $price_sy;
        $serviceprice->marketer_id= $request->marketer_id;
        $serviceprice->marketer_total= $marketer_total;
        $serviceprice->contract_id = $request->contract_id;
        $serviceprice->contract_total = $contract_total;
        $serviceprice->marketing_total= $marketing_total;
        $serviceprice->market_total = $market_total;
        $serviceprice->salesmanager_id= $request->salesmanager_id;
        $serviceprice->salesmanager_total= $salesmanager_total;

        $serviceprice->save();
        return redirect()->route('serviceprices');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Serviceprice  $serviceprice
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $serviceprice = Serviceprice::find($id);
        $serviceprice->delete();
        return redirect()->route('serviceprices');
    }
}
