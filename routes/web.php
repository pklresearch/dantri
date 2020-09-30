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

Route::get('/master', function () {
    return view('layouts.master');
});

Route::get('/input', function () {
    return view('input');
});

Route::get('/hmm', function () {
    return view('hmm');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/', function () {
    return view('layouts.medilab');
});
Route::get('/direktori', function () {
    return view('rs');
});