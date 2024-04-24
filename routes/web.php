<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PemohonController;

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

//Controller Route Example
Route::controller(PemohonController::class)->group(function(){
    Route::post('/create_permohonan', 'create_permohonan')->name('post.create_permohonan');
    Route::get('/edit_permohonan/{permohonan}', 'showEditPermohonan')->name('post.show_edit_permohonan');
    Route::put('/edit_permohonan/{permohonan}', 'editPermohonan')->name('post.edit');
    Route::delete('/delete_permohonan/{permohonan}', 'deletePermohonan')->name('post.delete'); 
});