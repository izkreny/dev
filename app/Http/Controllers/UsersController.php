<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    private $users = [
        ['id' => 1, 'name' => 'First user'],
        ['id' => 2, 'name' => 'Second user']
    ];
    
    public function index()
    {
        return view('users.index', ['users' => $this->users]);
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $nextID = count($this->users) + 1;
        $this->users[] = ['id' => $nextID, 'name' => $request->name];

        return redirect('/users');
    }

    public function edit($id)
    {
        // https://www.php.net/manual/en/function.array-filter.php
        $user = array_filter($this->users, function($user) use ($id) {
            return $user['id'] === $id;
        });

        // https://www.php.net/manual/en/function.array-shift
        // https://www.php.net/manual/en/functions.anonymous.php
        return view('users.edit', ['user' => array_shift($user)]);
    }

    public function update(Request $request, $id)
    {
        foreach ($this->users as $user) {
            if ($user['id'] === $id) {
                $user['name'] = $request->name;
                break;
            }
        }

        return redirect('/users');
    }

    public function destroy($id)
    {
        $this->users = array_filter($this->users, function($user) use ($id) {
            return $user['id'] !== $id;
        });

        return redirect('/users');
    }
}
