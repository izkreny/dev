<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Borrow;
use App\Models\Member;
use App\Models\Book;

class BorrowController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Eloquent automatic INNER JOIN via  eager loading
        $borrows = Borrow::with('member', 'book')->get();

        return view('borrows.index', compact('borrows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $members = Member::all();
        $books = Book::all();

        return view('borrows.create', compact('members', 'books'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_member' => 'required|numeric',
            'id_book' => 'required|numeric',
            'borrow_start_date' => 'required|date'
        ]);

        Borrow::create($request->all());

        return redirect()
                ->route('borrows.index')
                ->with('success', 'A book is successfully borrowed!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Borrow $borrow)
    {
        return view('borrows.show', compact($borrow));
    }

    /**
     * Show the form for editing the specified resource.
     * Borrow -> name of the model that we search
     * $borrow -> instance of the model with the ID
     */
    public function edit(Borrow $borrow)
    {
        $members = Member::all();
        $books = Book::all();

        return view('borrows.edit', compact('borrow', 'members', 'books'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Borrow $borrow)
    {
        $request->validate([
            'id_member' => 'required|numeric',
            'id_book' => 'required|numeric',
            'borrow_start_date' => 'required|date',
            'borrow_end_date' => 'nullable|date'
        ]);

        $borrow->update($request->all());

        return redirect()
                ->route('borrows.index')
                ->with('success', 'A borrow is successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Borrow $borrow)
    {
        $borrow->delete();

        return redirect()
                ->route('borrows.index')
                ->with('success', 'A borrow is successfully deleted!');
    }
}
