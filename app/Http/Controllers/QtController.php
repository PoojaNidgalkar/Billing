<?php

namespace App\Http\Controllers;

use App\qt;
use Illuminate\Http\Request;
use App\Client; 


class QtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $qt = Qt::with('clients');
        return view('Qtindex')->with('qt','clients');

        
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clients=Client::all();
        $Qts=qt::all();
        return view('Qtcreate',compact(['Qts','clients']));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //dd($request->all());
       $Qt=qt::create($request->all());
        return redirect()->route('quotes.Qtcreate','quotes.Qtindex');

    }
    
   
    /**
     * Display the specified resource.
     *
     * @param  \App\Qt  $qt
     * @return \Illuminate\Http\Response
     */
    public function show(qt $qt)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Qt  $qt
     * @return \Illuminate\Http\Response
     */
    public function edit(qt $qt)
    {
        //return view('Qtcreate')->with(compact('quote'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Qt  $qt
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, qt $qt)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Qt  $qt
     * @return \Illuminate\Http\Response
     */
    public function destroy(qt $qt)
    {
        //
    }
    public function Qtcreate(Request $request)
    {
        return view('Qtcreate');
    }

}
