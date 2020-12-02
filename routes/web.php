<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\MatapelajaranController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\KelassiswaController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\InputnilaisiswaController;
use App\Http\Controllers\NilairaportController;
use App\Http\Controllers\LaporanController;
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

//home or dashboard
Route::get('/home', [HomeController::class, 'index'])->name('home');

//admin
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
Route::get('/admin/search', [AdminController::class, 'search'])->name('admin.search');
Route::post('/tambahadmin', [AdminController::class, 'tambahadmin'])->name('admin.tambah');
Route::get('/editadmin/{id}', [AdminController::class, 'editadmin'])->name('admin.edit');
Route::patch('/updateadmin/{id}', [AdminController::class, 'updateadmin'])->name('admin.update');
Route::delete('/deleteadmin/{id}',[AdminController::class, 'deleteadmin'])->name('admin.delete');

//guru
Route::get('/guru', [GuruController::class, 'index'])->name('guru.index');
Route::get('/guru/search', [GuruController::class, 'search'])->name('guru.search');
Route::post('/tambahguru', [GuruController::class, 'tambahguru'])->name('guru.tambah');
Route::get('/editguru/{id}', [GuruController::class, 'editguru'])->name('guru.edit');
Route::patch('/updateguru/{id}', [GuruController::class, 'updateguru'])->name('guru.update');
Route::delete('/deleteguru/{id}',[GuruController::class, 'deleteguru'])->name('guru.delete');

//siswa
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/search', [SiswaController::class, 'search'])->name('siswa.search');
Route::post('/tambahsiswa', [SiswaController::class, 'tambahsiswa'])->name('siswa.tambah');
Route::get('/editsiswa/{id}', [SiswaController::class, 'editsiswa'])->name('siswa.edit');
Route::patch('/updatesiswa/{id}', [SiswaController::class, 'updatesiswa'])->name('siswa.update');
Route::delete('/deletesiswa/{id}',[SiswaController::class, 'deletesiswa'])->name('siswa.delete');

//matapelajaran
Route::get('/matapelajaran', [MatapelajaranController::class, 'index'])->name('matapelajaran.index');
Route::get('/matapelajaran/search', [MatapelajaranController::class, 'search'])->name('matapelajaran.search');
Route::post('/tambahmatapelajaran', [MatapelajaranController::class, 'tambahmatapelajaran'])->name('matapelajaran.tambah');
Route::get('/editmatapelajaran/{id}', [MatapelajaranController::class, 'editmatapelajaran'])->name('matapelajaran.edit');
Route::patch('/updatematapelajaran/{id}', [MatapelajaranController::class, 'updatematapelajaran'])->name('matapelajaran.update');
Route::delete('/deletematapelajaran/{id}',[MatapelajaranController::class, 'deletematapelajaran'])->name('matapelajaran.delete');

//kelas
Route::get('/kelas', [KelasController::class, 'index'])->name('kelas.index');

///kelassiwa
Route::get('/kelassiswa', [KelassiswaController::class, 'index'])->name('kelassiswa.index');

//nilai
Route::get('/nilai', [NilaiController::class, 'index'])->name('nilai.index');

//nilaisiswa
Route::get('/inputnilaisiswa', [InputnilaisiswaController::class, 'index'])->name('inputnilaisiswa.index');

//nilairaport
Route::get('/nilairaport', [NilairaportController::class, 'index'])->name('nilairaport.index');

//laporan
Route::get('/laporansiswa', [LaporanController::class, 'indexlaporansiswa'])->name('laporansiswa.index');
Route::get('/laporanguru', [LaporanController::class, 'indexlaporanguru'])->name('laporanguru.index');
Route::get('/laporankelas', [LaporanController::class, 'indexlaporankelas'])->name('laporankelas.index');
Route::get('/laporannilai', [LaporanController::class, 'indexlaporannilai'])->name('laporannilai.index');
Route::get('/laporanpelajaran', [LaporanController::class, 'indexlaporanpelajaran'])->name('laporanpelajaran.index');