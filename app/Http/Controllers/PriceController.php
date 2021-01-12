<?php

namespace App\Http\Controllers;

use App\Contract;
use App\Price;
use App\Equipment;
use App\Marketer;
use App\Salesmanager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PriceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prices = Price::all();
        return view('prices.index')->with('prices', $prices);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $equipments = Equipment::all();
        if ($equipments->count()==0){
            redirect()->route('equipment.create');
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
        return view('prices.create')->with('equipments', $equipments)
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
        $this->validate($request,[
            'equipment_id'=> 'required',
            'cost_price'=> 'required',
            'sale_price'=> 'required',
            'rate'=> 'required',
            'marketer_id'=> 'required',
            'salesmanager_id'=> 'required',

        ]);
        $cost_price_sy = $request->cost_price * $request->rate;
        $sale_price_sy = $request->sale_price * $request->rate;
        $marketer_total = 0.1 * ($sale_price_sy - $cost_price_sy);
        $contract_total = 0.1 * ($sale_price_sy - $cost_price_sy);
        $marketing_total = $marketer_total + $contract_total;
        $market_total = $marketer_total;
        $salesmanager_total = 0.1 * ($sale_price_sy - $marketing_total);

        Price::create([
            'equipment_id'=> $request->equipment_id,
            'cost_price'=> $request->cost_price,
            'sale_price'=> $request->sale_price,
            'rate'=> $request->rate,
            'cost_price_sy'=> $cost_price_sy,
            'sale_price_sy'=>  $sale_price_sy,
            'marketer_id'=> $request->marketer_id,
            'marketer_total'=> $marketer_total,
            'contract_id' => $request->contract_id,
            'contract_total' => $contract_total,
            'marketing_total'=> $marketing_total,
            'market_total' => $market_total,
            'salesmanager_id'=> $request->salesmanager_id,
            'salesmanager_total'=> $salesmanager_total,

        ]);

        return redirect()->route('prices');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Price  $price
     * @return \Illuminate\Http\Response
     */
    public function show(Price $price)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Price  $price
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $equipments = Equipment::all();
        if ($equipments->count()==0){
            redirect()->route('equipment.create');
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
        $price = Price::find($id);
        return view('prices.edit')->with('price', $price)->with('equipments', $equipments)
        ->with('marketers', $marketers)->with('contracts', $contracts)
        ->with('salesmanagers', $salesmanagers);



    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Price  $price
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $price = Price::find($id);
        // $this->validate($request,[
        //     'equipment_id'=> 'required',
        //     'cost_price'=> 'required',
        //     'sale_price'=> 'required',
        //     'rate'=> 'required',
        //     'marketer_id'=> 'required',
        //     'salesmanager_id'=> 'required',

        // ]);
        $cost_price_sy = $request->cost_price * $request->rate;
        $sale_price_sy = $request->sale_price * $request->rate;
        $marketer_total = 0.1 * ($sale_price_sy - $cost_price_sy);
        $contract_total = 0.1 * ($sale_price_sy - $cost_price_sy);
        $marketing_total = $marketer_total + $contract_total;
        $market_total = $marketer_total;
        $salesmanager_total = 0.2 * ($sale_price_sy - $marketing_total);

        $price->equipment_id = $request->equipment_id;
        $price->cost_price= $request->cost_price;
        $price->sale_price= $request->sale_price;
        $price->rate= $request->rate;
        $price->cost_price_sy= $cost_price_sy;
        $price->sale_price_sy=  $sale_price_sy;
        $price->marketer_id= $request->marketer_id;
        $price->marketer_total= $marketer_total;
        $price->contract_id = $request->contract_id;
        $price->contract_total = $contract_total;
        $price->marketing_total= $marketing_total;
        $price->market_total = $market_total;
        $price->salesmanager_id= $request->salesmanager_id;
        $price->salesmanager_total= $salesmanager_total;

        $price->save();
        return redirect()->route('prices');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Price  $price
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $price = Price::find($id);
        $price->delete();
        return redirect()->route('prices');
    }
}
