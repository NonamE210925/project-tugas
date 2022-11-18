<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BannerController;


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


    Route::prefix('struktur')->group(function () {
        Route::get('/', [App\Http\Controllers\StrukturController::class, 'index'])->name('struktur');
        Route::get('/tambah', [App\Http\Controllers\StrukturController::class, 'add'])->name('struktur.tambah');
        Route::post('/store', [App\Http\Controllers\StrukturController::class, 'store'])->name('struktur.store');
        Route::get('/{struktur:id}/edit', [App\Http\Controllers\StrukturController::class, 'edit'])->name('struktur.edit');
        Route::put('/update/{id}', [App\Http\Controllers\StrukturController::class, 'update'])->name('struktur.update');
        Route::delete('/{struktur:id}/destroy', [App\Http\Controllers\StrukturController::class, 'destroy'])->name('struktur.destroy');
    });

    Route::prefix('user')->group(function () {
        Route::get('/', [App\Http\Controllers\UserController::class, 'index'])->name('user');
        Route::get('/tambah', [App\Http\Controllers\UserController::class, 'add'])->name('user.tambah');
        Route::post('/store', [App\Http\Controllers\UserController::class, 'store'])->name('user.store');
        Route::get('/{user:id}/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('user.edit');
        Route::get('/{user:id}/detail', [App\Http\Controllers\UserController::class, 'detail'])->name('user.detail');
        Route::put('/update/{id}', [App\Http\Controllers\UserController::class, 'update'])->name('user.update');
        Route::delete('/{user:id}/destroy', [App\Http\Controllers\UserController::class, 'destroy'])->name('user.destroy');
    });

    Route::prefix('tugas')->group(function () {
        Route::get('/', [App\Http\Controllers\TugasController::class, 'index'])->name('tugas');
        Route::get('/{status:Draft}', [App\Http\Controllers\TugasController::class, 'status'])->name('tugas.status');
        // Route::get('/status{draft}', [App\Http\Controllers\TugasController::class, 'status'])->name('tugas.status');
        // Route::get('/status{draft}', [App\Http\Controllers\TugasController::class, 'status'])->name('tugas.status');
        // Route::get('/status{draft}', [App\Http\Controllers\TugasController::class, 'status'])->name('tugas.status');
        Route::get('/tambah', [App\Http\Controllers\TugasController::class, 'add'])->name('tugas.tambah');
        Route::post('/store', [App\Http\Controllers\TugasController::class, 'store'])->name('tugas.store');
        Route::get('/{tugas:id}/edit', [App\Http\Controllers\TugasController::class, 'edit'])->name('tugas.edit');
        Route::put('/update/{id}', [App\Http\Controllers\TugasController::class, 'update'])->name('tugas.update');
        Route::delete('/{tugas:id}/destroy', [App\Http\Controllers\TugasController::class, 'destroy'])->name('tugas.destroy');
    });

});
