<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Uspješna prijava
            return redirect()->route('home')->with('success', 'Uspješna prijava');
        }

        return redirect()->route('login')->with('error', 'Pogrešno korisničko ime ili lozinka');
    }
}
