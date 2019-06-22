<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client; 

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Clients = Client::all();
        // dd($Clients);
  
        return view('indexx', compact(['Clients']));
    }

    /**
     * Show the form for Creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $Client=Client::create($request->all());
        return redirect()->route('clients.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        return view('show')->with(compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        return view('editt')->with(compact('client'));
    }

    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        //Validate
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'contact' => 'required',
        ]);
        
        $client->name = $request->name;
        $client->address= $request->address;
        $client->contact = $request->contact;
        $client->save();
        $request->session()->flash('message', 'Successfully modified the client!');
        return redirect('clients');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = Client::find($id);
        $client->delete();
  
        return redirect('/clients');
    }
}
