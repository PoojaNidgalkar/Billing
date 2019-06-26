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
        $qoutes = Qt::all();
        return view('Qtindex', compact(['qoutes','clients']));       
        
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
        return view('Qtcreate',compact(['qt','clients','quotes']));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $qt = new Qt();
        $qt->client_id  = $request->id;
        $qt->Qid = $request->Qid;
        $qt->Itemname = $request->Itemname;
        $qt->Qty = $request->Qty;
        $qt->Price = $request->Price;
        $qt->Tax = $request->Tax;
        $qt->Total = $request->Total;
        $qt->save();
        //dd($qt);
         
    return redirect()->route('index');
        
    }
    
   
    /**
     * Display the specified resource.
     *
     * @param  \App\Qt  $qt
     * @return \Illuminate\Http\Response
     */
    public function show(qt $qt)
    { 
        $clients = Client::all();
        $qoutes = qt::all();

    return view('Qtshow', compact('qoutes'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Qt  $qt
     * @return \Illuminate\Http\Response
     */
    public function edit(qt $qt)
    {
        return view('Qtcreate')->with(compact('quote'));
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
    public function quotes(Request $request)
    {
        return view('quotes');
    }

    public function read(Request $request)
    {

        return 'classes' => ClassResource::collection($this->whenLoaded('classes')->slice(0,3)),
    }

}
