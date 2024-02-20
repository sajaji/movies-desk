@extends('layouts.app')

@section('title', 'Admin Dashboard')

@if(Session::has('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
    </div>
@endif

@section('content')
    <div class="container mx-auto">
        <h1 class="text-3xl font-bold text-gray-600">Admin Dashboard</h1>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header font-bold">Recent Movies</div>
                    <div class="card-body">
                        <!-- Display a list of recent movies -->
                        <ul>
                            @foreach($recentMovies as $movie)
                            <li><a href="{{ route('movies.show', $movie->id) }}" class="text-blue-500 hover:underline">{{ $movie->title }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header font-bold">Total Movies</div>
                    <div class="card-body font-bold">
                        <!-- Display the total number of movies -->
                        <p>Total: {{ $totalMovies }}</p>
                    </div>
                </div>
                <div class="mt-3">
                    <a href="{{ route('admin.movies.create') }}" class="btn btn-primary bg-gray-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create Movie</a>
                    <a href="{{ route('home') }}" class="btn btn-secondary bg-gray-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Go to Home Page</a>
                </div>
            </div>
        </div>
    </div>
@endsection
