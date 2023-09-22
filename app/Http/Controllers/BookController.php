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

    // Showing prepopulated form for editing existing data, equal to the form for the adding new data.
    public function edit(Book $book)
    {
        return view('book.edit', compact('book'));
    }

    // Atfet edit we call this method
    public function update(Request $request, Book $book)
    {
        $book->update($request->all());
        
        return redirect()->route('books.index');
    }

    public function confirmDelete(Book $book)
    {
        return view('book.confirm-delete', compact('book'));
    }

    // DELETE book
    public function destroy(Book $book)
    {
        $book->delete();

        return redirect()->route('books.index');
    }
}
