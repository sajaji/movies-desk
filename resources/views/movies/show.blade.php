@extends('layouts.app')

@section('title', $movie->title)

@section('content')
    <div class="container mx-auto">
        <h1 class="text-3xl font-bold text-gray-600">{{ $movie->title }}</h1>
        <div class="row">
            <div class="col-md-4">
                <img src="{{ $movie->poster_path }}" alt="{{ $movie->title }}" class="h-64 w-auto object-cover object-center group-hover:opacity-75">
            </div>
            <div class="col-md-8">
                <h3 class="font-bold">Overview</h3>
                <p>{{ $movie->overview }}</p>
                <p><strong>Release Date:</strong> {{ $movie->release_date }}</p>
                <p><strong>Vote Average:</strong> {{ $movie->vote_average }}</p>
                <p><strong>Popularity:</strong> {{ $movie->popularity }}</p>
                
                <form action="{{ route('admin.movies.edit', $movie->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('GET')
                    <button type="submit" class="bg-gray-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button>
                </form>

                <form action="{{ route('admin.movies.destroy', $movie->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                </form>

            </div>
        </div>
    </div>
@endsection
