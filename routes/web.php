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

Route::get('/no', function () {
    return view('layouts.app');
});

Route::get('/', function () {
    $comics = config('db');
    //dd($comics);
    return view('comics.index', compact('comics'));
})->name('comics.index');

Route::get('/{id}', function ($id) {
    $comics = config('db');
    //dd(count($comics));
    if ($id >= 0 && is_numeric($id) && $id < count($comics)) {
        //dd($id);
        //dd($comics[$id]);
        $comic = $comics[$id];
        return view('comics.show', compact('comic'));
    } else {
        //dd('Abort! 404');
        abort(404);
    }
})->name('comics.show');

Route::get('/characters', function () {
    return view('characters');
})->name('characters');

Route::get('/movies', function () {
    return view('movies');
})->name('movies');

Route::get('/TV', function () {
    return 'TV';
})->name('TV');

Route::get('/games', function () {
    return 'games';
})->name('games');

Route::get('/collectibles', function () {
    return 'collectibles';
})->name('collectibles');

Route::get('/videos', function () {
    return 'videos';
})->name('videos');

Route::get('/fans', function () {
    return 'fans';
})->name('fans');

Route::get('/news', function () {
    return 'news';
})->name('news');

Route::get('/shop', function () {
    return 'shop';
})->name('shop');