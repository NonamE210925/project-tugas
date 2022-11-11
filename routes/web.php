<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\KecamatanController;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\ProfilairbersihController;
use App\Http\Controllers\ProfilPendidikanController;

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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware(['auth', 'verified'])->group(function () {
    Route::prefix('kecamatan')->group(function () {
        Route::get('/', [App\Http\Controllers\KecamatanController::class, 'index'])->name('kecamatan');
        Route::get('/tambah', [App\Http\Controllers\KecamatanController::class, 'add'])->name('kecamatan.tambah');
        Route::post('/store', [App\Http\Controllers\KecamatanController::class, 'store'])->name('kecamatan.store');
        Route::get('/{kecamatan:id}/edit', [App\Http\Controllers\KecamatanController::class, 'edit'])->name('kecamatan.edit');
        Route::put('/update/{id}', [App\Http\Controllers\KecamatanController::class, 'update'])->name('kecamatan.update');
        Route::delete('/{kecamatan:id}/destroy', [App\Http\Controllers\KecamatanController::class, 'destroy'])->name('kecamatan.destroy');
    });

    Route::prefix('banner')->group(function () {
        Route::get('/', [App\Http\Controllers\BannerController::class, 'index'])->name('banner');
        Route::get('/tambah', [App\Http\Controllers\BannerController::class, 'add'])->name('banner.tambah');
        Route::post('/store', [App\Http\Controllers\BannerController::class, 'store'])->name('banner.store');
        Route::get('/{banner:id}/edit', [App\Http\Controllers\BannerController::class, 'edit'])->name('banner.edit');
        Route::put('/update/{id}', [App\Http\Controllers\BannerController::class, 'update'])->name('banner.update');
        Route::delete('/{banner:id}/destroy', [App\Http\Controllers\BannerController::class, 'destroy'])->name('banner.destroy');
    });


    Route::prefix('kelurahan')->group(function () {
        Route::get('', [App\Http\Controllers\KelurahanController::class, 'index'])->name('kelurahan');
        Route::get('/tambah', [App\Http\Controllers\KelurahanController::class, 'add'])->name('kelurahan.tambah');
        Route::post('/store', [App\Http\Controllers\KelurahanController::class, 'store'])->name('kelurahan.store');
        Route::get('/{kelurahan:id}/edit', [App\Http\Controllers\KelurahanController::class, 'edit'])->name('kelurahan.edit');
        Route::put('/update/{id}', [App\Http\Controllers\KelurahanController::class, 'update'])->name('kelurahan.update');
        Route::delete('/{kelurahan:id}/destroy', [App\Http\Controllers\KelurahanController::class, 'destroy'])->name('kelurahan.destroy');
    });

    Route::prefix('profilairbersih')->group(function () {
        Route::get('', [App\Http\Controllers\ProfilairbersihController::class, 'index'])->name('profilairbersih');
        Route::get('/tambah', [App\Http\Controllers\ProfilairbersihController::class, 'add'])->name('profilairbersih.tambah');
        Route::post('/store', [App\Http\Controllers\ProfilairbersihController::class, 'store'])->name('profilairbersih.store');
        Route::get('/{profilairbersih:id}/edit', [App\Http\Controllers\ProfilairbersihController::class, 'edit'])->name('profilairbersih.edit');
        Route::put('/update/{id}', [App\Http\Controllers\ProfilairbersihController::class, 'update'])->name('profilairbersih.update');
        Route::delete('/{profilairbersih:id}/destroy', [App\Http\Controllers\ProfilairbersihController::class, 'destroy'])->name('profilairbersih.destroy');
    });

    Route::prefix('profilpendidikan')->group(function () {
        Route::get('', [App\Http\Controllers\ProfilPendidikanController::class, 'index'])->name('profilpendidikan');
        Route::get('/tambah', [App\Http\Controllers\ProfilPendidikanController::class, 'add'])->name('profilpendidikan.tambah');
        Route::post('/store', [App\Http\Controllers\ProfilPendidikanController::class, 'store'])->name('profilpendidikan.store');
        Route::get('/{profilpendidikan:id}/edit', [App\Http\Controllers\ProfilPendidikanController::class, 'edit'])->name('profilpendidikan.edit');
        Route::put('/update/{id}', [App\Http\Controllers\ProfilPendidikanController::class, 'update'])->name('profilpendidikan.update');
        Route::delete('/{profilpendidikan:id}/destroy', [App\Http\Controllers\ProfilPendidikanController::class, 'destroy'])->name('profilpendidikan.destroy');
    });
});
