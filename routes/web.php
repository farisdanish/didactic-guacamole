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
    return view('login');

})->name('login_request');

// Route::get('/senarai_permohonan', function () {
//     return view('senaraipermohonan');
// });

//Controller Route Example
Route::controller(PemohonController::class)->group(function(){
    Route::get('/borang_permohonan', 'borang_permohonan')->name('pemohon.borang_permohonan');
    Route::post('/create_permohonan', 'create_permohonan')->name('pemohon.create_permohonan');
    Route::get('/senarai_permohonan', 'senarai_permohonan')->name('pemohon.senarai_permohonan');
    Route::get('/ubah_permohonan/{permohonan}', 'showEditPermohonan')->name('pemohon.show_edit_permohonan');
    Route::put('/ubah_permohonan/{permohonan}', 'editPermohonan')->name('pemohon.edit');
    Route::delete('/padam_permohonan/{permohonan}', 'deletePermohonan')->name('pemohon.delete'); 
});