<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NumberController extends Controller
{
    //
    public function add($a, $b)
    {
        $sum = $a + $b;

        return view("sum", ["sum" => $sum]);
    }
}
