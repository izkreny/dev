<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;

class PersonController extends Controller
{
    public function form()
    {
        return view('personForm');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'surname' => 'required|string|max:100',
        ]);
        
        // Inser into database
        Person::create($request->all());

        return redirect('/form')->with('SUCCESS', 'Person successfully created.');
    }

    public function show()
    {
        // SELECT * FROM people;
        $people = Person::all();

        return view('showPeople', ['people' => $people]);
    }
}
