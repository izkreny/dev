<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Borrow;

class BorrowController extends Controller
{
    public function index()
    {
        // https://laravel.com/docs/10.x/eloquent#retrieving-models
        $borrows = Borrow::join('members', 'borrows.id_member', '=', 'members.id')
                    ->join('books', 'borrows.id_book', '=', 'books.id')
                    ->select('borrows.id', 'members.name', 'members.surname', 'books.title', 'borrows.borrow_start_date', 'borrows.borrow_end_date')
                    ->get();

        return view('borrow.index', compact('borrows'));
    }

    // Method for showing input form for the Borrow
    public function create()
    {
        return view('borrow.create');
    }

    // Adding data to database
    public function store(Request $request)
    {
        $request->validate([
            'id_member' => 'required|numeric',
            'id_book' => 'required|numeric',
            'borrow_start_date' => 'required|date'
        ]);

        Borrow::create($request->all());

        return redirect()->route('borrows.index')->with('SUCCESS', 'Book is borrowed!');
    }

    // TODO: Add Update and Delete from CRUD
}
