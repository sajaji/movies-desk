<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Movie;

class DashboardController extends Controller
{
    /**
     * Display the admin dashboard.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        // Fetch data for the admin dashboard
        $totalMovies = Movie::count();
        $recentMovies = Movie::orderBy('created_at', 'desc')->take(5)->get();
        // Add more logic as needed...

        // Pass the data to the view
        return view('admin.dashboard', [
            'totalMovies' => $totalMovies,
            'recentMovies' => $recentMovies,
            // Add more data as needed...
        ]);
    }
}
