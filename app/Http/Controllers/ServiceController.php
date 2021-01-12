<?php

namespace App\Http\Controllers;

use App\Service;
use App\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suppliers = Supplier::all();
        if ($suppliers->count()==0){
            redirect()->route('supplier.create');
        }
        $services = Service::all();
        return view('services.index')->with('services', $services)->with('suppliers', $suppliers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $suppliers = Supplier::all();
        if ($suppliers->count()==0){
            redirect()->route('supplier.create');
        }

        return view('services.create')->with('suppliers', $suppliers);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'=>'required',
            'suppliers' =>'required'
        ]);
        $service = Service::create([
            'name'=>$request->name,

            // 'suppliers' => $request->suppliers,
              ]);
              $service->supplier()->attach($request->suppliers);
              return redirect()->route('services');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        // $suppliers = Supplier::all();
        // $service = Service::where('slug', $slug)->first();

        // return view('services.show')->with('service', $service)->with('suppliers', $suppliers);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $suppliers = Supplier::all();
        $service = Service::find($id);
        return view('services.edit')->with('service', $service)
        ->with('suppliers', $suppliers);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $service = Service::find($id);
        // $this->validate($request,[
        //     'name'=> 'required',

        // ]);
        $service->name = $request->name;
        $service->save();
        $service->supplier()->sync($request->suppliers);
        return redirect()->route('services');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::find($id);
        $service->delete();
        return redirect()->route('services');
    }
}
