@extends('layouts.app')

@section('title', $movie->title)

@section('content')
    <div class="container">
        <h1>{{ $movie->title }}</h1>
        <div class="row">
            <div class="col-md-4">
                <img src="{{ $movie->poster_path }}" alt="{{ $movie->title }}" class="img-fluid">
            </div>
            <div class="col-md-8">
                <h3>Overview</h3>
                <p>{{ $movie->overview }}</p>
                <p><strong>Release Date:</strong> {{ $movie->release_date }}</p>
                <p><strong>Vote Average:</strong> {{ $movie->vote_average }}</p>
                <p><strong>Popularity:</strong> {{ $movie->popularity }}</p>
                
                <form action="{{ route('admin.movies.edit', $movie->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('GET')
                    <button type="submit" class="btn btn-danger">Edit</button>
                </form>

                <form action="{{ route('admin.movies.destroy', $movie->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection
