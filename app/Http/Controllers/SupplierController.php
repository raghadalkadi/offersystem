<?php

namespace App\Http\Controllers;

use App\Supplier;
use App\Equipment;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suppliers = Supplier::all();
        return view('suppliers.index')->with('suppliers', $suppliers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('suppliers.create');
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
            'name'=> 'required',
            'address'=> 'required',
            'authorized_person' => 'required',
            'person_phone' => 'required |numeric',
            'email' => 'required | email',
            'job_title' => 'required',
        ]);
        $supplier = Supplier::create([
            'name'=>$request->name,
            'address' =>$request->address,
            'authorized_person' =>$request->authorized_person,
            'person_phone' =>$request->person_phone,
            'email' =>$request->email,
            'job_title' =>$request->job_title,
        ]);

        return redirect()->route('suppliers');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function show(Supplier $supplier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $supplier = Supplier::find($id);
        return view('suppliers.edit')->with('supplier', $supplier);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $supplier = Supplier::find($id);
        // $this->validate($request,[
        //     'name'=> 'required',

        // ]);
        $supplier->name = $request->name;
        $supplier->address =$request->address;
        $supplier->authorized_person =$request->authorized_person;
        $supplier->person_phone=$request->person_phone;
        $supplier->email=$request->email;
        $supplier->job_title =$request->job_title;
        $supplier->save();

        return redirect()->route('suppliers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $supplier = Supplier::find($id);
        $supplier->delete();
        return redirect()->route('suppliers');
    }
}
