<?php

namespace App\Http\Controllers;


use App\Models\Theme;
use Illuminate\Http\Request;

class ThemeController extends Controller
{
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'ganre_id' => 'required|integer|min:0|exists:ganre,id',
            'ganre' => 'required|string|max:255',
        ]);

        Theme::create($request->all());
        return redirect()->back()->with('success', 'Genre Stored.');
    }
}
