<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('movies');
})->name('movies');

Route::get('/characters', function () {
    return view('characters');
})->name('characters');

Route::get('/comics', function () {
    return view('comics');
})->name('comics');

Route::get('/tv', function () {
    return view('tv');
})->name('tv');

Route::get('/games', function () {
    return view('games');
})->name('games');

Route::get('/collectibles', function () {
    return view('collectibles');
})->name('collectibles');

Route::get('/videos', function () {
    return view('videos');
})->name('videos');

Route::get('/fans', function () {
    return view('fans');
})->name('fans');

Route::get('/news', function () {
    return view('news');
})->name('news');

Route::get('/shop', function () {
    return view('shop');
})->name('shop');

Route::get('/movie-details/{slug}', function ($slug) {


    $movies = config('movies');

    $moviesFilter_array = array_filter($movies, fn($movie) => $movie['slug'] === $slug);

    if(empty($moviesFilter_array)){
        return to_route('movies');

        //genero 404
        //abort(404);
    }

    $movieChosen = $moviesFilter_array[array_key_first($moviesFilter_array)];


    return view('movie-details', compact('movieChosen'));
})->name('movie-details');
