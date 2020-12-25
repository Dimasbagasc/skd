<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Histori;

class HistoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $history = Histori::all();
        return view('history',['histori'=>$history]);
    }
  
}
