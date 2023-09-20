<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Borrow;

class BorrowController extends Controller
{
    public function index()
    {
        $borrows = Borrow::all();

        return view('borrow.index', compact('borrows'));
    }

    // Method for showing input form for the Borrow
    public function create()
    {
        return view('borrow.create');
    }

    // TODO: Add Update and Delete from CRUD
}
