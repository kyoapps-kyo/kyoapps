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
    return view('pages.root');
});
Route::get('/videos', function () {
    return view('pages.videos');
})->name('videos');
Route::get('/about', function () {
    return view('pages.about');
})->name('about');
Route::get('/services', function () {
    return view('pages.services');
})->name('services');
Route::get('/portfolio', function () {
    return view('pages.portfolio');
})->name('portfolio');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
