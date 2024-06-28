<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PemohonController;
use App\Http\Controllers\RegisterController;

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
    return view('home');
})->name('login_request');

// Route::get('/senarai_permohonan', function () {
//     return view('senaraipermohonan');
// });

//Controller Route Example
Route::controller(PemohonController::class)->group(function(){
    Route::get('/borang_permohonan', 'borang_permohonan')->name('pemohon.borang_permohonan');
    Route::post('/create_permohonan', 'create_permohonan')->name('pemohon.create_permohonan');
    Route::post('/send_permohonan', 'send_permohonan')->name('pemohon.send_permohonan');
    Route::get('/senarai_permohonan', 'senarai_permohonan')->name('pemohon.senarai_permohonan');
    Route::get('/ubah_permohonan/{permohonan}', 'showEditPermohonan')->name('pemohon.show_edit_permohonan');
    Route::put('/ubah_permohonan/{permohonan}', 'editPermohonan')->name('pemohon.edit_permohonan');
    Route::delete('/padam_permohonan/{permohonan}', 'deletePermohonan')->name('pemohon.delete_permohonan'); 
});

Auth::routes();

Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [RegisterController::class, 'register'])->name('register');
    Route::post('/register', [RegisterController::class, 'registerPost'])->name('register');
    // Route::get('/login', [AuthController::class, 'login'])->name('login');
    // Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
});

// Route::group(['middleware' => 'auth'], function () {
//     Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
// });

// Route::get('home', function () {
//     // Only authenticated users may enter...
//     return view('home');
// })->middleware('auth')->name('login_request');