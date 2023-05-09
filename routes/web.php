<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KontenController;
use App\Http\Controllers\StrukturController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\SantriController;
use App\Http\Controllers\OrangController;
use App\Http\Controllers\WaliController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\PenerimaanController;

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

Route::get('/', [WelcomeController::class, 'index'])->name('/');
Route::get('/detail/{id}', [WelcomeController::class, 'detail'])->name('detail');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middelware'=>['auth']], function(){
Route::resource('struktur', StrukturController::class);
Route::resource('konten', KontenController::class);
Route::resource('santri', SantriController::class);
Route::get('/cetak/{id}', [PendaftaranController::class, 'cetak']);
Route::resource('orang', OrangController::class);
Route::resource('wali', WaliController::class);
Route::resource('users', UserController::class);
Route::resource('pendaftaran', PendaftaranController::class);
Route::get('/cetak_pdf', [PendaftaranController::class, 'cetak_pdf']);
Route::resource('penerimaan', PenerimaanController::class);
});
