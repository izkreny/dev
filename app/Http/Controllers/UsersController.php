<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $users = [
            ['id' => 1, 'name' => 'First'],
            ['id' => 2, 'name' => 'Second']
        ];

        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        return view('users.create');
    }

    public function edit($id)
    {
        // Simple example without database
        $user = ['id' => $id, 'name' => 'Third'];

        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        return redirect('/');
    }

    public function destroy($id)
    {
        return redirect('/');
    }
}
