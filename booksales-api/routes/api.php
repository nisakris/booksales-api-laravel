<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\GenreController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::apiResource('/authors', BookController::class);
Route::apiResource('/genres', BookController::class);
Route::apiResource('/books', BookController::class);
// Route::get('/books', [BookController::class, 'index'])->name('books.index');
// Route::post('/books', [BookController::class, 'store'])->name('books.store');
// Route::get('/books/{id}',[BookController::class, 'show'])->name('books.show');
// Route::post('/books/{id}',[BookController::class, 'update'])->name('books.update');
// Route::delete('/books/{id}',[BookController::class, 'destroy'])->name('books.destroy');

// Route::get('/authors', [AuthorController::class, 'index'])->name('authors.index');
// Route::post('/authors', [AuthorController::class, 'store'])->name('authors.store');

// Route::get('/genres', [GenreController::class, 'index'])->name('genres.index');
// Route::post('/genres', [GenreController::class, 'store'])->name('genres.store');