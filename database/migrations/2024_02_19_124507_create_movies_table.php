<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('vote_count');
            $table->integer('tmdb_id')->default(0);
            $table->boolean('video')->default(0);
            $table->float('vote_average');
            $table->string('title');
            $table->float('popularity');
            $table->string('poster_path');
            $table->string('original_language');
            $table->string('original_title');
            $table->json('genre_ids');
            $table->boolean('adult')->default(0);
            $table->text('overview');
            $table->date('release_date');
        });

        // Schema::table('movies', function (Blueprint $table) {
        //     $table->unsignedBigInteger('tmdb_id')->nullable()->change();
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }


};
