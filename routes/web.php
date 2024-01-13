<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/', [UserController::class, 'login'])->name('login');
Route::post('/postlogin', [UserController::class, 'postlogin'])->name('postlogin');
Route::middleware('auth')->group(function () {
    Route::get('/logout', [UserController::class, 'logout'])->name('logout');


    Route::get('/admin', [UserController::class, 'admin'])->name('admin');

    Route::get('/tambah', [UserController::class, 'tambah'])->name('tambah');
    Route::post('/posttambah', [UserController::class, 'posttambah'])->name('posttambah');

    Route::get('/edit/{Destinasi}', [UserController::class, 'edit'])->name('edit');
    Route::post('/postedit/{Destinasi}', [UserController::class, 'postedit'])->name('postedit');
    Route::get('/hapus/{Destinasi}', [UserController::class, 'hapus'])->name('hapus');
});

