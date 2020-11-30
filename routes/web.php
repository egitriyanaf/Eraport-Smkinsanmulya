<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\SiswaController;
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
    return view('auth/login');
});


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
Route::get('/admin/search', [AdminController::class, 'search'])->name('admin.search');
Route::post('/tambahadmin', [AdminController::class, 'tambahadmin'])->name('admin.tambah');
Route::get('/editadmin/{id}', [AdminController::class, 'editadmin'])->name('admin.edit');
Route::patch('/updateadmin/{id}', [AdminController::class, 'updateadmin'])->name('admin.update');
Route::delete('/deleteadmin/{id}',[AdminController::class, 'deleteadmin'])->name('admin.delete');

Route::get('/guru', [GuruController::class, 'index'])->name('guru.index');
Route::get('/guru/search', [GuruController::class, 'search'])->name('guru.search');
Route::post('/tambahguru', [GuruController::class, 'tambahguru'])->name('guru.tambah');
Route::get('/editguru/{id}', [GuruController::class, 'editguru'])->name('guru.edit');
Route::patch('/updateguru/{id}', [GuruController::class, 'updateguru'])->name('guru.update');
Route::delete('/deleteguru/{id}',[GuruController::class, 'deleteguru'])->name('guru.delete');

Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/search', [SiswaController::class, 'search'])->name('siswa.search');
Route::post('/tambahsiswa', [SiswaController::class, 'tambahsiswa'])->name('siswa.tambah');
Route::get('/editsiswa/{id}', [SiswaController::class, 'editsiswa'])->name('siswa.edit');
Route::patch('/updatesiswa/{id}', [SiswaController::class, 'updatesiswa'])->name('siswa.update');
Route::delete('/deletesiswa/{id}',[SiswaController::class, 'deletesiswa'])->name('siswa.delete');