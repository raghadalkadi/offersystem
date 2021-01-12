<?php

namespace App\Http\Controllers;

use App\Marketer;
use Illuminate\Http\Request;

class MarketerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $marketers = Marketer::all();
        return view('marketers.index')->with('marketers', $marketers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('marketers.create');
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
        $marketer = Marketer::create([
            'name'=>$request->name,
        ]);

        return redirect()->route('marketers');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Marketer  $marketer
     * @return \Illuminate\Http\Response
     */
    public function show(Marketer $marketer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Marketer  $marketer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $marketer = Marketer::find($id);
        return view('marketers.edit')->with('marketer', $marketer);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Marketer  $marketer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $marketer = Marketer::find($id);
        // $this->validate($request, [
        //     'name' => 'required'
        // ]);
        $marketer->name = $request->name;
        $marketer->save();
        return redirect()->route('marketers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Marketer  $marketer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $marketer = Marketer::find($id);
        $marketer->delete();
        return redirect()->route('marketers');
    }
}
