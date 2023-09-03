<?php

use App\Http\Controllers\AdministratorController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\TestInputController;
use App\Http\Controllers\TransaksiController;
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

Route::get('/test', function () {
    return view('test');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/test-controller/{param1}', [TestController::class, 'index']);

Route::get('/artikel/{slug}', [ArtikelController::class, 'view']);

Route::get('/table', [TableController::class, 'view']);

Route::get('/crud_user', function(){
    return view('crud_user');
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);


Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/petugas', [AdministratorController::class, 'admin'])->name('petugas.index');
Route::get('/petugas-input', [AdministratorController::class, 'petugas_add'])->name('addPetugas.get');
Route::get('/petugas-form-add', [AdministratorController::class, 'form_add_admin']);
Route::delete('/petugas/{id}', [AdministratorController::class, 'destroy'])->name('petugas.destroy');

Route::get('/super-admin', [AdministratorController::class, 'super_admin']);
Route::get('/super-admin-input', [AdministratorController::class, 'super_admin_add'])->name('addSuperAdmin.get');
Route::get('/super-admin-form-add', [AdministratorController::class, 'form_add_super_admin']);

Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
Route::get('/mahasiswa-input', [MahasiswaController::class, 'mahasiswa_add'])->name('addMahasiswa.get');
Route::get('/mahasiswa-form-add', [MahasiswaController::class, 'form_add']);
Route::delete('/mahasiswa/{id}', [MahasiswaController::class, 'destroy'])->name('mahasiswa.destroy');

Route::get('/barang', [BarangController::class, 'index'])->name('barang.index');
Route::get('/barang-input', [BarangController::class, 'store'])->name('addBarang.get');
Route::get('/barang-form-add', [BarangController::class, 'create']);
Route::delete('/barang/{id}', [BarangController::class, 'destroy'])->name('barang.destroy');
Route::get('/barang/{id}/edit', [BarangController::class, 'edit'])->name('barang.edit');
Route::patch('/barang/{id}/update', [BarangController::class, 'update'])->name('barang.update');

Route::get('/peminjaman', [TransaksiController::class, 'peminjaman_view'])->name('peminjaman.index');
Route::delete('/peminjaman/{id}', [TransaksiController::class, 'destroy_applicant'])->name('peminjaman.destroy');
Route::get('/pengembalian', [TransaksiController::class, 'pengembalian_view']);



Route::get('/forgot_password', [AuthController::class, 'forgot_password'])->name('forgot.password');
Route::get('/user', [AdministratorController::class, 'user'])->name('user');
Route::get('/testing-input-dummy', [TestInputController::class, 'index']);
Route::get('/testing-input', [TestInputController::class, 'input_peminjaman'])->name('input.get');
Route::get('/testing-view', [TestInputController::class, 'table']);




