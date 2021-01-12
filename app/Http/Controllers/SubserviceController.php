<?php

namespace App\Http\Controllers;

use App\Subservice;
use App\Service;
use Illuminate\Http\Request;

class SubserviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subservices = Subservice::all();
        return view('subservices.index')->with('subservices', $subservices);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services = Service::all();

        return view('subservices.create')->with('services', $services);
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
            'service_id'=> 'required',
            'name'=> 'required',
            'price'=> 'required',
            'currency'=> 'required',
        ]);

        $offer = Subservice::create([
            'service_id'=>$request->service_id,
            'name'=>$request->name,
            'price'=>$request->price,
            'currency'=>$request->currency,
        ]);
        return redirect()->route('subservices');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Subservice  $subservice
     * @return \Illuminate\Http\Response
     */
    public function show(Subservice $subservice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subservice  $subservice
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $services = Service::all();
        $subservice = Subservice::find($id);

        return view('subservices.edit')->with('subservice', $subservice)
        ->with('services', $services);
    }

    public function subservicesget($id)
    {
        $subservices = Subservice::where('service_id',$id)->get();
        return $subservices;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subservice  $subservice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $subservice = Subservice::find($id);

        $subservice->name = $request->name;
        $subservice->price = $request->price;
        $subservice->currency = $request->currency;

        $subservice->save();

        return redirect()->route('subservices');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subservice  $subservice
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subservice = Subservice::find($id);
        $subservice->delete();
        return redirect()->route('subservices');
    }
}
