<?php

namespace App\Http\Controllers;

use App\Equipment;
use App\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class EquipmentController extends Controller
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

        $equipments = Equipment::all();
        return view('equipments.index')->with('equipments', $equipments)->with('suppliers', $suppliers);
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

        return view('equipments.create')->with('suppliers', $suppliers);
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
        $equipment = Equipment::create([
            'name'=>$request->name,
            
              ]);
              $equipment->suppliers()->attach($request->suppliers);
              return redirect()->route('equipments');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Equipment  $equipment
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {

        // $suppliers = Supplier::all();
        // $equipment = Equipment::where('slug', $slug)->first();
        // //dd($slug);
        // return view('equipments.show')->with('equipment', $equipment)->with('suppliers', $suppliers);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Equipment  $equipment
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $suppliers = Supplier::all();
        if ($suppliers->count()==0){
            redirect()->route('supplier.create');
        }
        $equipment = Equipment::find($id);
        return view('equipments.edit')->with('equipment', $equipment)
        ->with('suppliers', $suppliers);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Equipment  $equipment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $equipment = Equipment::find($id);
        // $this->validate($request,[
        //     'name'=> 'required',

        // ]);
        $equipment->name = $request->name;
        $equipment->save();
        $equipment->suppliers()->sync($request->suppliers);
        return redirect()->route('equipments');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Equipment  $equipment
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $equipment = Equipment::find($id);
        $equipment->delete();
        return redirect()->route('equipments');
    }
}
