<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authors = Author::all();

        return view('authors.index', compact('authors'));  
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Authors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'bio' => 'required',
        ]);

        Author::create($request->all());
        return redirect()->route('authors.index')->with('success','Author created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Author $author)
    {
        return view('author.show', compact('author'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Author $author)
    {
        return view('authors.edit', compact('author'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Author $author)
    {
        $validateData = $request->validate([
            'name' => 'required|string',
            'bio' => 'rrequired|string',
        ]);

        $author->update($validateData);
        return redirect()->route('authors.index')->with('success','Author created successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Author $author)
    {
        $author->delete();

        return redirect()->route('authors.index')->with('success','Author delete successfully');
    }
}