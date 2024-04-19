<?php

use Illuminate\Support\Facades\DB;
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
    $jkdb = DB::table('jkdb')->get();
    $daerah = DB::table('daerah')->get();
    $parlimen = DB::table('parlimen')->get();
    $dun = DB::table('dun')->get();

    return view('borang', ['jkdb' => $jkdb,'daerah' => $daerah,'parlimen' => $parlimen,'dun' => $dun]);
});

Route::get('/senaraipermohonan', function () {
    return view('senaraipermohonan');
});