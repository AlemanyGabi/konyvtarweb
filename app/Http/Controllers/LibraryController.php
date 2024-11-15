<?php

namespace App\Http\Controllers;

use App\Models\Library;
use Illuminate\Http\Request;

class LibraryController extends Controller
{
    public function creater()
    {
        return view('creater');
    }
    public function go()
    {
        $libraries = Library::all();
        return view('go', compact('libraries'));
    }

    public function storer(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|min:0',
            'ganre_id' => 'required|integer|min:0',
            'release_date' => 'required|date|min:0',
        ]);

        Library::create($request->all());
        return redirect()->back()->with('success', 'Book Stored.');
    }
}
