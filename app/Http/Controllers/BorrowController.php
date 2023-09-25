<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Borrow;
use App\Models\Member;

class BorrowController extends Controller
{
    public function index()
    {
        /*
        |------------------------------------------------------------------
        | https://laravel.com/docs/10.x/eloquent#retrieving-models
        |
        | SQL QUERY:
        |------------------------------------------------------------------
        |
        |   SELECT
        |       members.name, members.surname,
        |       books.title,
        |       borrows.borrow_start_date, borrows.borrow_end_date
        |   FROM borrows
        |   INNER JOIN members
        |       ON borrows.id_member = members.id
        |   INNER JOIN books
        |       ON borrows.id_book = books.id;
        |
        */
        $borrows = Borrow::join('members', 'borrows.id_member', '=', 'members.id')
                    ->join('books', 'borrows.id_book', '=', 'books.id')
                    ->select('members.name', 'members.surname', 'books.title',
                        'borrows.id', 'borrows.borrow_start_date', 'borrows.borrow_end_date')
                    ->orderBy('borrows.id', 'asc')
                    ->get();

        return view('borrow.index', compact('borrows'));
    }

    public function create()
    {        
        /*
        |------------------------------------------------------------------
        | https://laravel.com/docs/10.x/queries#or-where-clauses
        |
        | SQL QUERY:
        | TODO: Remove duplicated rows with the same books.id
        |------------------------------------------------------------------
        |
        |   SELECT
        |       books.id, books.title,
        |       borrows.borrow_start_date, borrows.borrow_end_date
        |   FROM borrows
        |   RIGHT JOIN books
        |       ON borrows.id_book = books.id
        |   WHERE
        |       (borrows.borrow_start_date is null)
        |       OR
        |       (borrows.borrow_start_date is not null
        |           AND borrows.borrow_end_date is not null);
        |
        */
        $books = Borrow::rightJoin('books', 'borrows.id_book', '=', 'books.id')
                    ->select('books.id', 'books.title', 'borrows.borrow_start_date', 'borrows.borrow_end_date')
                    ->where('borrows.borrow_start_date', '=', null)
                    ->orWhere(function (Builder $query) {
                        $query->where('borrows.borrow_start_date', '<>', null)
                            ->where('borrows.borrow_end_date', '<>', null);
                    })
                    ->get();
        $members = Member::all();

        return view('borrow.create', compact('members', 'books'));
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
