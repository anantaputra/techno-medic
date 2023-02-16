<?php

use App\Http\Controllers\AdminController;
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
    return redirect()->route('login');
});

Route::prefix('admin')->middleware('auth')->group(function() {
    Route::get('/', [AdminController::class, 'index'])->name('admin');
    Route::get('user', [AdminController::class, 'user'])->name('admin.user');
    Route::get('user/{id}/active', [AdminController::class, '_active'])->name('admin.user.active');
    Route::get('jenis-barang', [AdminController::class, 'jenis_barang'])->name('admin.jenis_barang');
    Route::get('jenis-barang/tambah', [AdminController::class, 'jenis_barang_tambah'])->name('admin.jenis_barang.tambah');
    Route::post('jenis-barang/simpan', [AdminController::class, 'jenis_barang_simpan'])->name('admin.jenis_barang.simpan');
    Route::get('jenis-barang/ubah/{id}', [AdminController::class, 'jenis_barang_ubah'])->name('admin.jenis_barang.ubah');
    Route::post('jenis-barang/edit', [AdminController::class, 'jenis_barang_edit'])->name('admin.jenis_barang.edit');
    Route::get('jenis-barang/hapus/{id}', [AdminController::class, 'jenis_barang_hapus'])->name('admin.jenis_barang.hapus');
    Route::get('barang', [AdminController::class, 'barang'])->name('admin.barang');
    Route::get('barang/tambah', [AdminController::class, 'barang_tambah'])->name('admin.barang.tambah');
    Route::post('barang/simpan', [AdminController::class, 'barang_simpan'])->name('admin.barang.simpan');
    Route::get('barang/ubah/{id}', [AdminController::class, 'barang_ubah'])->name('admin.barang.ubah');
    Route::post('barang/edit', [AdminController::class, 'barang_edit'])->name('admin.barang.edit');
    Route::get('barang/hapus/{id}', [AdminController::class, 'barang_hapus'])->name('admin.barang.hapus');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
