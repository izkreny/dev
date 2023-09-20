<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();

        return view('book.index', compact('books'));
    }

    // Method for showing input form for the Book
    public function create()
    {
        return view('book.create');
    }

    // Adding data to database
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'published' => 'required|numeric'
        ]);

        Book::create($request->all());

        return redirect()->route('books.index')->with('SUCCESS', 'Book is added.');
    }

    // TODO: Add Update and Delete from CRUD
}
