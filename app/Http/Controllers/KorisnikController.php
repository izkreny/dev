<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Korisnik;

class KorisnikController extends Controller
{
    public function prikaziRegistraciju()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        // $request->validate(
        $validator = Validator::make($request->all(), 
            [
                'name' => 'required|string|max:200',
                // unique -- chek inside the database
                'email' => 'required|string|max:200|unique:korisniks',
                // confirmed -- ako lozinka iz forme odogovara onoj u bazi?!
                'password' => 'required|string|min:8|max:100|confirmed'
            ]
        );

        if ($validator->fails()) {
            return redirect()->route('home')->with('error', "There is some kind of error! :-/");
        }
        
        try {
            $user = Korisnik::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);

            auth()->login($user);

            return redirect()->route('home')->with('success', "Registration successful! :-)");
        } catch(\Exception $e) {
            return redirect()->route('home')->with('error', "There is some kind of error! :-|");
        }
    }
}
