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
    return view('welcome');
});

Route::get('/home', function () {
    return view('userhome');
});

Route::get('/adminhome', function () {
    return view('adminhome');
});

Route::get('/tema/artikel', function () {
    return view('tema.artikel');
});

Route::get('/tema/film', function () {
    return view('tema.film');
});

Route::get('/tema/fitness', function () {
    return view('tema.fitness');
});

Route::get('/tema/kesehatan', function () {
    return view('tema.kesehatan');
});

Route::get('/tema/kuliner', function () {
    return view('tema.kuliner');
});

Route::get('/tema/otomotif', function () {
    return view('tema.otomotif');
});

Route::get('/tema/resep-masakan', function () {
    return view('tema.resep-masakan');
});

Route::get('/tema/traveling', function () {
    return view('tema.traveling');
});

Route::get('/tags', function () {
    return view('tags');
});

Route::get('/tambah', function () {
    return view('tambah-artikel');
});