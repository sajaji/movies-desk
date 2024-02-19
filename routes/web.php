<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\Admin\MovieAdminController;

// Frontend Routes
Route::get('/', [MovieController::class, 'index'])->name('home');
Route::get('/movies/{id}', [MovieController::class, 'show'])->name('movies.show');

// Admin Panel Routes
Route::prefix('admin')->group(function () {
    Route::get('/', [MovieAdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/movies/create', [MovieAdminController::class, 'create'])->name('admin.movies.create');
    Route::post('/movies', [MovieAdminController::class, 'store'])->name('admin.movies.store');
    Route::get('/movies/{id}/edit', [MovieAdminController::class, 'edit'])->name('admin.movies.edit');
    Route::put('/movies/{id}', [MovieAdminController::class, 'update'])->name('admin.movies.update');
    Route::delete('/movies/{id}', [MovieAdminController::class, 'destroy'])->name('admin.movies.destroy');
});

// Pagination Route
Route::get('/movies/page/{page}', [MovieController::class, 'index']);


