<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    public function showRegistration()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $request->validate([
                'name' => 'required|string|max:200',
                // unique -- chek inside the database
                'email' => 'required|string|max:200|unique:users',
                // confirmed -- ako lozinka iz forme odogovara onoj u bazi?!
                'password' => 'required|string|min:4|max:100|confirmed'
            ]
        );

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return redirect()->route('login')->with('success', "Registration successful! :-)");
    }

    public function logout() {
        // logout user
        auth()->logout();
        // redirect to homepage
        return redirect()->route('login')->with('success', 'Successful logout.');
    }
}
