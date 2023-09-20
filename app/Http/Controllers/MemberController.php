<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    public function index()
    {
        $members = Member::all();

        return view('member.index', compact('members'));
    }

    // Method for showing input form for the Member
    public function create()
    {
        return view('member.create');
    }

    // Adding data to database
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'surname' => 'required'
        ]);

        Member::create($request->all());

        return redirect()->route('members.index')->with('SUCCESS', 'Member is added.');
    }

    // TODO: Add Update and Delete from CRUD
}
