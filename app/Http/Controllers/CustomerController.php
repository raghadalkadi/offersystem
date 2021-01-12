<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::all();
        return view('customers.index')->with('customers', $customers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customers.create');
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
        $customer = Customer::create([
            'name'=>$request->name,
            'address' =>$request->address,
            'authorized_person' =>$request->authorized_person,
            'person_phone' =>$request->person_phone,
            'email' =>$request->email,
            'job_title' =>$request->job_title,
        ]);
        return redirect()->route('customers');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = Customer::find($id);
        return view('customers.edit')->with('customer', $customer);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $customer = Customer::find($id);
        // $this->validate($request,[
        //     'name'=> 'required',

        // ]);
        $customer->name = $request->name;
        $customer->address =$request->address;
        $customer->authorized_person =$request->authorized_person;
        $customer->person_phone=$request->person_phone;
        $customer->email=$request->email;
        $customer->job_title =$request->job_title;
        $customer->save();

        return redirect()->route('customers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = Customer::find($id);
        $customer->delete();
        return redirect()->route('customers');
    }
}
