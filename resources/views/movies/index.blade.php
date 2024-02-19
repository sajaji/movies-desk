@extends('layouts.app')

@section('title', 'Movies')

@section('content')
    <div class="container">
        <h1>Movies</h1>
        <div class="row">
            @foreach($movies as $movie)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ $movie->poster_path }}" class="card-img-top" alt="{{ $movie->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $movie->title }}</h5>
                            <p class="card-text">{{ $movie->overview }}</p>
                            <a href="{{ route('movies.show', $movie->id) }}" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{ $movies->links() }}
    </div>
@endsection
