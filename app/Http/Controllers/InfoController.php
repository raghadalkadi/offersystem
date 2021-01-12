<?php

namespace App\Http\Controllers;

use App\Info;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $infos = Info::all();
        return view('infos.index')->with('infos', $infos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('infos.create');
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
            'address'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'logo'=>'required|image',
        ]);

        $logo = $request->logo;
        $newLogo = time().$logo->getClientOriginalName();
        $logo->move('public/logo/', $newLogo);

        $info = Info::create([
            'name'=>$request->name,
            'address'=>$request->address,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'logo'=>'public/logo/'.$newLogo,
        ]);

        return redirect()->route('infos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Info  $info
     * @return \Illuminate\Http\Response
     */
    public function show(Info $info)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Info  $info
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $info = Info::find($id);
        return view('infos.edit')->with('info', $info);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Info  $info
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $info = Info::find($id);
        // $this->validate($request,[
        //     'name'=> 'required',
        //     'address'=>'required',
        //     'phone'=>'required',
        //     'email'=>'required',

        // ]);
        if ($request->has('logo')){
            $logo = $request->logo;
            $newLogo = time().$logo->getClientOrginalName();
            $logo->move('public/logo/', $newLogo);
            $info->logo = 'public/logo/'.$newLogo;
        }

        $info->name = $request->name;
        $info->address =$request->address;
        $info->phone=$request->phone;
        $info->email=$request->email;
        $info->save();

        return redirect()->route('infos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Info  $info
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $info = Info::find($id);
        $info->delete();
        return redirect()->route('infos');
    }
}
