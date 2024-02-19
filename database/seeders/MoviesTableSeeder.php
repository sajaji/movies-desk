<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;
use Illuminate\Support\Facades\Storage;


class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = Storage::disk('local')->get('movies.json');
        $data = json_decode($json, true);

        foreach ($data as $movie) {
            Movie::create([
                'vote_count' => $movie['vote_count'],
                'tmdb_id' => $movie['id'],
                'video' => $movie['video'],
                'vote_average' => $movie['vote_average'],
                'title' => $movie['title'],
                'popularity' => $movie['popularity'],
                'poster_path' => $movie['poster_path'],
                'original_language' => $movie['original_language'],
                'original_title' => $movie['original_title'],
                'genre_ids' => json_encode($movie['genre_ids']),
                'adult' => $movie['adult'],
                'overview' => $movie['overview'],
                'release_date' => $movie['release_date'],
            ]);
        }
    }
}
