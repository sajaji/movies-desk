@extends('layouts.app')

@section('title', 'Edit Movie')

@section('content')
    <div class="container">
        <h1>Edit Movie - {{ $movie->title }}</h1>
        <form action="{{ route('admin.movies.update', $movie->id) }}" method="POST">
            @csrf
            @method('PUT')
            <!-- vote_count -->
            <div class="form-group">
                <label for="vote_count">Vote Count</label>
                <input type="number" class="form-control" id="vote_count" name="vote_count" value="{{ $movie->vote_count }}" required>
            </div>
            <!-- tmdb_id -->
            <div class="form-group">
                <label for="tmdb_id">TMDB ID</label>
                <input type="number" class="form-control" id="tmdb_id" name="tmdb_id" value="{{ $movie->tmdb_id }}">
            </div>
            <!-- video -->
            <div class="form-group">
                <label for="video">Video</label>
                <input type="text" class="form-control" id="video" name="video" value="{{ $movie->video }}" required>
            </div>
            <!-- vote_average -->
            <div class="form-group">
                <label for="vote_average">Vote Average</label>
                <input type="number" step="0.1" class="form-control" id="vote_average" name="vote_average" value="{{ $movie->vote_average }}" required>
            </div>
            <!-- title -->
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $movie->title }}" required>
            </div>
            <!-- popularity -->
            <div class="form-group">
                <label for="popularity">Popularity</label>
                <input type="number" step="0.01" class="form-control" id="popularity" name="popularity" value="{{ $movie->popularity }}" required>
            </div>
            <!-- poster_path -->
            <div class="form-group">
                <label for="poster_path">Poster Path</label>
                <input type="text" class="form-control" id="poster_path" name="poster_path" value="{{ $movie->poster_path }}" required>
            </div>
            <!-- original_language -->
            <div class="form-group">
                <label for="original_language">Original Language</label>
                <input type="text" class="form-control" id="original_language" name="original_language" value="{{ $movie->original_language }}" required>
            </div>
            <!-- original_title -->
            <div class="form-group">
                <label for="original_title">Original Title</label>
                <input type="text" class="form-control" id="original_title" name="original_title" value="{{ $movie->original_title }}" required>
            </div>
            <!-- genre_ids -->
            <div class="form-group">
                <label for="genre_ids">Genre IDs</label>
                <input type="text" class="form-control" id="genre_ids" name="genre_ids" value="{{ $movie->genre_ids }}" required>
            </div>
            <!-- adult -->
            <div class="form-group">
                <label for="adult">Adult</label>
                <input type="text" class="form-control" id="adult" name="adult" value="{{ $movie->adult }}" required>
            </div>
            <!-- overview -->
            <div class="form-group">
                <label for="overview">Overview</label>
                <textarea class="form-control" id="overview" name="overview" required>{{ $movie->overview }}</textarea>
            </div>
            <!-- release_date -->
            <div class="form-group">
                <label for="release_date">Release Date</label>
                <input type="date" class="form-control" id="release_date" name="release_date" value="{{ $movie->release_date }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
