<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Halamanutamacontroller extends Controller
{
    public function caesar (){
        return view('caesar');
    }

    public function vigenere (){
        return view('vigenere');
    }

    public function rc4 (){
        return view('rc4');
    }

    public function history (){
        return view('history');
    }
}
