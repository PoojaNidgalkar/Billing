<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Client; 
use App\qt;


class QtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $qts = Qt::table('qts')->get();
      return view('Qtindex', ['qts' => $qts]);
    }


   public function create()
   {
      $clients=Client::all();
      $Qts=qt::all();
     return view('Qtcreate',compact(['qt','clients','quotes']));
     
   }

   public function store(Request $request)
   {
         foreach($request->item_name as $qt=>$v)
          {
             $data=array(
            'item_name'=>$request->item_name[$qt],
            'quantity'=>$request->quantity[$qt],
            'price'=>$request->price[$qt],
            'tax'=>$request->tax[$qt],
            'total'=>$request->total[$qt],
            'Grandtotal'=>$request->Grandtotal[$qt]
          );
            //dd($request->all());
          Qt::insert($data);
         
          }
        
          return redirect()->back()->with('success','data insert successfully');
  }
    
     /**
     * Display the specified resource.
     *
     * @param  \App\Qt  $qt
     * @return \Illuminate\Http\Response
     */
    public function show(qt $qt)
    { 
         
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Qt  $qt
     * @return \Illuminate\Http\Response
     */
    public function edit(qt $qt)
    {
       
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Qt  $qt
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,qt $qt)
    {
        
         
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Qt  $qt
     * @return \Illuminate\Http\Response
     */
    public function destroy($qt)
    {
       
    }


      }
