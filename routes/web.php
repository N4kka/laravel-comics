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

$list = config('list');
$comics = config('comics');

$data = [
    'comics' => $comics,
    'list' => $list
];

Route::get('/', function () use ($data) {
    return view('home_page', $data);
})->name('home_page');

Route::get('/comic_page/{id}', function ($id) use ($data) {
    $comic = collect(config('comics'));
    $current_comic = $comic->where('id', $id)->first();

    if (!$current_comic) {
        return abort(404);
    }

    $data = array_merge($data, [
        'comics' => $current_comic
    ]);

    return view('comic_page', $data);
})->name('comic_page');
