<?php

namespace App\Http\Controllers;

use App\Models\mufaly;
use Illuminate\Http\Request;

class MufalyController extends Controller
{
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'ganre' => 'required|string|max:255',
        ]);

        mufaly::create($request->ganre);
        return redirect()->back()->with('success', 'Genre Stored.');
    }
}
