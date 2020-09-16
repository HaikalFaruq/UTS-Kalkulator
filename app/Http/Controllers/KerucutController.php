<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KerucutController extends Controller
{
    public function calculatefunc(Request $request){
        $first = 1 / 3;
        $p = 3.14;
        $r = $request->input('r');
        $t = $request->input('t');
        $result = $first * $p * $r * $r * $t;
        if($result == 0){
            return redirect('/')->with('kerucut', 'Masukkan angka yang valid'); 
        } else {
            return redirect('/')->with('kerucut', 'Jawabannya :'.' '.$result);
        }
    }
}