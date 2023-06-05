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

Route::get('/', function () {
    return view('characters');
})->name('characters');

Route::get('/', function () {
    return view('comics');
})->name('comics');

Route::get('/', function () {
    return view('tv');
})->name('tv');

Route::get('/', function () {
    return view('games');
})->name('games');

Route::get('/', function () {
    return view('collectibles');
})->name('movies');

Route::get('/', function () {
    return view('movies');
})->name('movies');

Route::get('/', function () {
    return view('movies');
})->name('movies');

Route::get('/', function () {
    return view('movies');
})->name('movies');

Route::get('/', function () {
    return view('movies');
})->name('movies');
