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
            </div>
        </div>
    </div>
@endsection
