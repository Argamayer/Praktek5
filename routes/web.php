<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/halaman1', function () {
    return view('welcome');
});

Route::get('/halaman2', function () {
    return view('dua');
});

Route::get('/', function () {
    return view('testing');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/biodata', function () {
    return view('biodata');
});

Route::get('/produk', function () {
    return view('produk');
});

Route::get('/bukutamu', function () {
    return view('bukutamu');
});