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

// $nav_list = [
    // [   IMPORTANT
    // CREARE UN FILE NELLA CARTELLA CONFIG "LIST.PHP" E COLLEGARLO QUI
        // "inserire le voci dell'header, dopodiché passarle al data con 'nav_voices' => $nav_list e per le altre rotte fare use ($nav_list)"
    // ]
// ];

Route::get('/', function () {
    $comics_array = config('comics');

    $data = [
        'comic_card' => $comics_array,
    ];
    return view('home_page', $data);
})->name('home_page');

Route::get('/single_page', function() {
    return view('single_page');
})->name('single_page');