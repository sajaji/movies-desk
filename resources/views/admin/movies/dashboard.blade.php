@extends('layouts.app')

@section('title', 'Admin Dashboard')

@if(Session::has('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
    </div>
@endif

@section('content')
    <div class="container">
        <h1>Admin Dashboard</h1>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Recent Movies</div>
                    <div class="card-body">
                        <!-- Display a list of recent movies -->
                        <ul>
                            @foreach($recentMovies as $movie)
                                <li><a href="{{ route('movies.show', $movie->id) }}">{{ $movie->title }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Total Movies</div>
                    <div class="card-body">
                        <!-- Display the total number of movies -->
                        <p>Total: {{ $totalMovies }}</p>
                    </div>
                </div>
                <div class="mt-3">
                    <a href="{{ route('admin.movies.create') }}" class="btn btn-primary">Create Movie</a>
                    <a href="{{ route('home') }}" class="btn btn-secondary">Go to Movie Home Page</a>
                </div>
            </div>
        </div>
    </div>
@endsection
