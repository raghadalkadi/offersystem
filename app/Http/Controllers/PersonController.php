<?php

namespace App\Http\Controllers;

use App\Person;
use App\Account;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accounts = Account::all();
        $people = Person::all();
        return view('people.index')->with('people', $people)
        ->with('accounts', $accounts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $accounts = Account::all();
        return view('people.create')->with('accounts', $accounts);
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
            'type'=>'required',
            'address'=> 'required',
            'person_phone' => 'required |numeric',
            'accounts'=>'required'
        ]);
        $person = Person::create([
            'name'=>$request->name,
            'type'=>$request->type,
            'address' =>$request->address,
            'person_phone' =>$request->person_phone,
        ]);
        $person->account()->attach($request->accounts);
        return redirect()->route('people');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function show(Person $person)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $accounts = Account::all();
        $person = Person::find($id);
        return view('people.edit')->with('person', $person)
        ->with('accounts', $accounts);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $person = Person::find($id);

        $person->name = $request->name;
        $person->type= $request->type;
        $person->address =$request->address;
        $person->person_phone=$request->person_phone;
        $person->save();
        $person->account()->sync($request->accounts);
        return redirect()->route('people');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $person = Person::find($id);
        $person->delete();
        return redirect()->route('people');
    }
}
