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
        $request->validate([
            'password' => 'required|string|min:4|max:100'
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Uspješna prijava
            return redirect()->route('home')->with('success', 'Successful login!');
        }

        return redirect()->route('login')->with('error', 'Wrong email or password.');
    }
}
