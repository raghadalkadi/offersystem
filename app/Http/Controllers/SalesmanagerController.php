<?php

namespace App\Http\Controllers;

use App\Salesmanager;
use Illuminate\Http\Request;

class SalesmanagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salesmanagers = Salesmanager::all();
        return view('salesmanagers.index')->with('salesmanagers', $salesmanagers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('salesmanagers.create');
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
        ]);
        $salesmanager = Salesmanager::create([
            'name'=>$request->name,
        ]);

        return redirect()->route('salesmanagers');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Salesmanager  $salesmanager
     * @return \Illuminate\Http\Response
     */
    public function show(Salesmanager $salesmanager)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Salesmanager  $salesmanager
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $salesmanager = Salesmanager::find($id);
        return view('salesmanagers.edit')->with('salesmanager', $salesmanager);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Salesmanager  $salesmanager
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $salesmanager = Salesmanager::find($id);
        // $this->validate($request, [
        //     'name' => 'required'
        // ]);
        $salesmanager->name = $request->name;
        $salesmanager->save();
        return redirect()->route('salesmanagers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Salesmanager  $salesmanager
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $salesmanager = Salesmanager::find($id);
        $salesmanager->delete();
        return redirect()->route('salesmanagers');
    }
}
