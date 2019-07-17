<?php

namespace App\Http\Controllers;

use App\qt;
use Illuminate\Http\Request;
use App\Client; 
use App\Quotes;  



class QtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
   public function create()
   {
      
    $clients=Client::all();
    $Qts=qt::all();
    return view('Qtcreate',compact(['qt','clients','quotes']));
   }
}
