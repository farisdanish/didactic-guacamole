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

Route::get('/', function () {
    return view('borangpermohonan');
});

Route::get('/pengesahan', function () {
    return view('pengesahanpermohonan');
});

Route::get('/paparan', function () {
    return view('paparanpermohonan');
});

Route::get('/semakan', function () {
    return view('semakanpermohonan');
});

Route::get('/paparansemak', function () {
    return view('paparansemakpermohonan');
});

Route::get('/layout', function () {
    return view('layout');
});
