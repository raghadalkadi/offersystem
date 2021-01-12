<?php

namespace App\Http\Controllers;

use App\Supplierinvoices;
use App\Supplier;
use Illuminate\Http\Request;

class SupplierinvoicesController extends Controller
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
            redirect()->route('suppliers');}
        $supplierinvoices = Supplierinvoices::all();
        return view('supplierinvoices.index')->with('supplierinvoices', $supplierinvoices)->with('suppliers', $suppliers);
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

        return view('supplierinvoices.create')->with('suppliers', $suppliers);
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
            'payment_situation'=> 'required',
            'invoice'=> 'required',

        ]);
// dd($request);
        $supplierinvoices = Supplierinvoices::create([
            'payment_situation'=>$request->payment_situation,
            'invoice'=>$request->invoice,
            'supplier_id'=> $request->supplier_id
        ]);

        return redirect()->route('supplierinvoices');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Supplierinvoices  $supplierinvoices
     * @return \Illuminate\Http\Response
     */
    public function show(Supplierinvoices $supplierinvoices)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Supplierinvoices  $supplierinvoices
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $supplierinvoice = Supplierinvoices::find($id);
        return view('supplierinvoices.edit')->with('supplierinvoice', $supplierinvoice);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Supplierinvoices  $supplierinvoices
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $supplierinvoice = Supplierinvoices::find($id);
        // $this->validate($request,[
        //     'payment_situation'=> 'required',

        // ]);
        $supplierinvoice->payment_situation = $request->payment_situation;
        $supplierinvoice->invoice = $request->invoice;
        $supplierinvoice->save();

        return redirect()->route('supplierinvoices');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Supplierinvoices  $supplierinvoices
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $supplierinvoice = Supplierinvoices::find($id);
        $supplierinvoice->delete();
        return redirect()->route('supplierinvoices');
    }
}
