<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NumberController extends Controller
{
    /*
    public function add($a, $b)
    {
        $sum = $a + $b;

        return view("sum", ["sum" => $sum]);
    }*/

    public function add(Request $request)
    {
        $number1 = $request->input('number1');
        $number2 = $request->input('number2');

        $sum = $number1 + $number2;

        return view("sum", ["sum" => $sum]);
    }
}
