@extends('layouts.app')

@section('title', 'Create Movie')

@section('content')
    <div class="container mx-auto">
        <h1 class="text-3xl font-bold text-gray-600">Create Movie</h1>
        <form action="{{ route('admin.movies.store') }}" method="POST">
            @csrf
            <!-- vote_count -->
            <div class="form-group">
                <label for="vote_count" class="block text-gray-700">Vote Count</label>
                <input type="number" class="appearance-none border border-gray-300 rounded py-2 px-4 mb-3 leading-tight focus:outline-none focus:border-blue-500" id="vote_count" name="vote_count" required>
            </div>

            <!-- tmdb_id -->
            <div class="form-group">
                <label for="tmdb_id" class="block text-gray-700">TMDB ID</label>
                <input type="number" class="appearance-none border border-gray-300 rounded py-2 px-4 mb-3 leading-tight focus:outline-none focus:border-blue-500" id="tmdb_id" name="tmdb_id" >
            </div>
            <!-- video -->
            <div class="form-group">
                <label for="video" class="block text-gray-700">Video</label>
                <input type="number" class="appearance-none border border-gray-300 rounded py-2 px-4 mb-3 leading-tight focus:outline-none focus:border-blue-500" id="video" name="video" required>
            </div>
            <!-- vote_average -->
            <div class="form-group">
                <label for="vote_average" class="block text-gray-700">Vote Average</label>
                <input type="number" step="0.1" class="appearance-none border border-gray-300 rounded py-2 px-4 mb-3 leading-tight focus:outline-none focus:border-blue-500" id="vote_average" name="vote_average" required>
            </div>
            <!-- title -->
            <div class="form-group">
                <label for="title" class="block text-gray-700">Title</label>
                <input type="text" class="appearance-none border border-gray-300 rounded py-2 px-4 mb-3 leading-tight focus:outline-none focus:border-blue-500" id="title" name="title" required>
            </div>
            <!-- popularity -->
            <div class="form-group">
                <label for="popularity" class="block text-gray-700">Popularity</label>
                <input type="number" step="0.01" class="appearance-none border border-gray-300 rounded py-2 px-4 mb-3 leading-tight focus:outline-none focus:border-blue-500" id="popularity" name="popularity" required>
            </div>
            <!-- poster_path -->
            <div class="form-group">
                <label for="poster_path" class="block text-gray-700">Poster Path</label>
                <input type="text" class="appearance-none border border-gray-300 rounded py-2 px-4 mb-3 leading-tight focus:outline-none focus:border-blue-500" id="poster_path" name="poster_path" required>
            </div>
            <!-- original_language -->
            <div class="form-group">
                <label for="original_language" class="block text-gray-700">Original Language</label>
                <input type="text" class="appearance-none border border-gray-300 rounded py-2 px-4 mb-3 leading-tight focus:outline-none focus:border-blue-500" id="original_language" name="original_language" required>
            </div>
            <!-- original_title -->
            <div class="form-group">
                <label for="original_title" class="block text-gray-700">Original Title</label>
                <input type="text" class="appearance-none border border-gray-300 rounded py-2 px-4 mb-3 leading-tight focus:outline-none focus:border-blue-500" id="original_title" name="original_title" required>
            </div>
            <!-- genre_ids -->
            <div class="form-group">
                <label for="genre_ids" class="block text-gray-700">Genre IDs</label>
                <input type="text" class="appearance-none border border-gray-300 rounded py-2 px-4 mb-3 leading-tight focus:outline-none focus:border-blue-500" id="genre_ids" name="genre_ids" required>
            </div>
            <!-- adult -->
            <div class="form-group">
                <label for="adult" class="block text-gray-700">Adult</label>
                <input type="number" class="appearance-none border border-gray-300 rounded py-2 px-4 mb-3 leading-tight focus:outline-none focus:border-blue-500" id="adult" name="adult" >
            </div>
            <!-- overview -->
            <div class="form-group">
                <label for="overview" class="block text-gray-700">Overview</label>
                <textarea class="appearance-none border border-gray-300 rounded py-2 px-4 mb-3 leading-tight focus:outline-none focus:border-blue-500l" id="overview" name="overview" required></textarea>
            </div>
            <!-- release_date -->
            <div class="form-group">
                <label for="release_date" class="block text-gray-700">Release Date</label>
                <input type="date" class="appearance-none border border-gray-300 rounded py-2 px-4 mb-3 leading-tight focus:outline-none focus:border-blue-500" id="release_date" name="release_date" required>
            </div>
            <button type="submit" class="btn btn-primary bg-gray-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit</button>
        </form>
    </div>
@endsection
