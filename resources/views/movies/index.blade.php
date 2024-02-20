@extends('layouts.app')

@section('title', 'Movies')

@section('content')
    <div class="container mx-auto">
    <h1 class="text-3xl font-bold mb-4 text-gray-600">TOP RATED MOVIES</h1>
    <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 xl:gap-x-8">
        @foreach($movies as $movie)
            <a href="{{ route('movies.show', $movie->id) }}" class="group">
                <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                    <img src="{{ $movie->poster_path }}" alt="Image Not Found!" class="h-64 w-full object-cover object-center group-hover:opacity-75">
                </div>
                <h3 class="mt-4 text-sm text-gray-700">{{ $movie->title }}</h3>
                <p class="mt-1 text-lg font-medium text-gray-900">{{ $movie->release_date }}</p>
            </a>
        @endforeach
    </div>
        {{ $movies->links() }}
    </div>
@endsection
