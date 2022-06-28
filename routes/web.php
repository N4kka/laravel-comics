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

$comic = collect(config('comics'));

Route::get('/', function () use ($comic) {
    $data = [
        'comics' => $comic
    ];

    return view('home_page', $data);
})->name('home_page');

Route::get('/comic_page/{id}', function ($id) use ($comic) {
    $current_comic = $comic->where('id', $id)->first();
    $data = [
        'comics' => $current_comic
    ];

    return view('single_page', $data);
})->name('single_page');
