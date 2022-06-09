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
    return view('comics', compact('comics'));
})->name('comics');
