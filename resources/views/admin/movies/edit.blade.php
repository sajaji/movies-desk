@extends('layouts.app')

@section('title', 'Edit Movie')

@section('content')
    <div class="container">
        <h1>Edit Movie - {{ $movie->title }}</h1>
        <!-- Form to edit the movie goes here -->
    </div>
@endsection
