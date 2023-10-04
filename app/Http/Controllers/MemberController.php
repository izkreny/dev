<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $members = Member::all();

        return view('members.index', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('members.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'member_uid' => 'required|unique:members',
        ]);

        Member::create($request->all());

        return redirect()
                ->route('members.index')
                ->with('success', 'A new member has been successfully created.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Member $member)
    {
        return view('members.show', compact('member'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Member $member)
    {
        return view('members.edit', compact('member'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Member $member)
    {
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'member_uid' => 'required|unique:members,member_uid,' . $member->id,
        ]);
        
        $member->update($request->all());
        
        return redirect()
                ->route('members.index')
                ->with('sucess', "An existing member has been successfully updated.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Member $member)
    {
        $member->delete();

        return redirect()
                ->route('members.index')
                ->with('success', "Member has been successfully deleted.");
    }
}
