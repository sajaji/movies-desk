<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class MovieAdminController extends Controller
{
    public function dashboard()
    {
        // Fetch data for admin dashboard
        $totalMovies = Movie::count();
        $recentMovies = Movie::orderBy('created_at', 'desc')->take(5)->get();

        return view('admin.movies.dashboard', compact('totalMovies', 'recentMovies'));
    }

    public function create()
    {
        return view('admin.movies.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            // Validation rules for movie creation
            'title' => 'required|string|max:255',
            // Add more validation rules as needed
        ]);

        // Create a new movie
        Movie::create($request->all());

        return redirect()->route('admin.dashboard')->with('success', 'Movie created successfully.');
    }

    public function edit($id)
    {
        $movie = Movie::findOrFail($id);
        return view('admin.movies.edit', compact('movie'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            // Validation rules for movie update
            'title' => 'required|string|max:255',
            // Add more validation rules as needed
        ]);

        $movie = Movie::findOrFail($id);
        $movie->update($request->all());

        return redirect()->route('admin.dashboard')->with('success', 'Movie updated successfully.');
    }

    public function destroy($id)
    {
        $movie = Movie::findOrFail($id);
        $movie->delete();

        return redirect()->route('admin.dashboard')->with('success', 'Movie deleted successfully.');
    }
}
