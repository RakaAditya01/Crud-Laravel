<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\TabelguruController;

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
})->middleware('auth');

// Guru
Route::get('/guru', [GuruController::class, 'index'])->name('guru');

Route::get('/tambahguru', [GuruController::class, 'create'])->name('tambahguru');

Route::post('/insertdata', [GuruController::class, 'store'])->name('insertdata');

Route::get('/tampilan/{id}', [GuruController::class, 'tampilan'])->name('tampilan');

Route::put('/updatedata/{id}', [GuruController::class, 'update'])->name('updatedata');

Route::delete('/deletedata/{id}', [GuruController::class, 'destroy'])->name('deletedata');

// EndGuru

// Kelas
Route::get('/kelas', [KelasController::class, 'index'])->name('kelas');

Route::get('/tambahkelas', [KelasController::class, 'create'])->name('tambahkelas');

Route::post('/insertdatakelas', [KelasController::class, 'store'])->name('insertdatakelas');

Route::get('/tampilankelas/{id}', [KelasController::class, 'tampilan'])->name('tampilankelas');

Route::put('/updatedatakelas/{id}', [KelasController::class, 'update'])->name('updatedatakelas');

Route::delete('/deletedatakelas/{id}', [KelasController::class, 'destroy'])->name('deletedatakelas');
// End Kelas

// Agenda
Route::get('/agenda', [AgendaController::class, 'index'])->name('agenda');

Route::get('/tambahagenda', [AgendaController::class, 'create'])->name('tambahagenda');

Route::post('/insertdataagenda', [AgendaController::class, 'store'])->name('insertdataagenda');

Route::get('/tampilanagenda/{id}', [AgendaController::class, 'tampilan'])->name('tampilanagenda');

Route::put('/updatedataagenda/{id}', [AgendaController::class, 'update'])->name('updatedataagenda');

Route::delete('/deletedataagenda/{id}', [AgendaController::class, 'destroy'])->name('deletedataagenda');
// End Agenda

// login
Route::get('/login', [LoginController::class, 'login'])->name('login');

Route::get('/register', [LoginController::class, 'register'])->name('register');

Route::post('/registeruser', [LoginController::class, 'registeruser'])->name('registeruser');

Route::post('/loginproses', [LoginController::class, 'loginproses'])->name('loginproses');
// end login

// Auth->Admin
Route::group(['middleware' => ['auth', 'cek_login:,guru']], function (){
    Route::get('/tabel', [TabelguruController::class, 'index'])->name('tabel');

});
// End Auth

// tabel guru
Route::get('/tabel', [TabelguruController::class, 'index'])->name('tabel');

Route::get('/tambahtabel', [TabelguruController::class, 'create'])->name('tambahtabel');

Route::post('/insertdatatabel', [TabelguruController::class, 'store'])->name('insertdatatabel');

Route::get('/tampilantabel/{id}', [TabelguruController::class, 'tampilan'])->name('tampilantabel');

Route::put('/updatedatatabel/{id}', [TabelguruController::class, 'update'])->name('updatedatatabel');

Route::delete('/deletedatatabel/{id}', [TabelguruController::class, 'destroy'])->name('deletedatatabel');
// end tabel guru