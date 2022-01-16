<?php

use Illuminate\Support\Facades\Route;
// use Illuminate\sepakbolaController;
use App\Http\Controllers\SepakbolaController;
use App\Http\Controllers\BolabasketController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\frontendController;
use App\Http\Controllers\DashboardController;

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

// route admin/backend===========
Route::get('backend.dashboard',[DashboardController::class, 'index'])->name('backend.dashboard');


// route bola basket
Route::get('upload.bolabasket', [BolabasketController::class, 'index'])->name('upload.basket');
Route::get('create.basket', [BolabasketController::class, 'create'])->name('create.basket');
Route::get('bolabasket.edit{id}', [BolabasketController::class, 'edit'])->name('bolabasket.edit');
Route::POST('bolabasket.store', [BolabasketController::class, 'store'])->name('bolabasket.store');
Route::post('/basket/delete/{id}',[BolabasketController::class, 'destroy'])->name('bolabasket.destroy');
Route::POST('/bolabasket/update/{id}',[BolabasketController::class, 'update'])->name('bolabasket.update');

// Route Sepak Bola
Route::get('upload.sepakbola', [SepakbolaController::class, 'index'])->name('upload.sepakbola');
Route::get('create.sepakbola', [SepakbolaController::class, 'create'])->name('create.sepakbola');
Route::get('sepakbola.edit{id}', [SepakbolaController::class, 'edit'])->name('sepakbola.edit');
Route::POST('admin.sepakbola.store', [SepakbolaController::class, 'store'])->name('admin.sepakbola.store');
Route::POST('/sepakbola/update/{id}',[SepakbolaController::class, 'update'])->name('sepakbola.update');
Route::post('/sepakbola/delete/{id}',[SepakbolaController::class, 'destroy'])->name('sepakbola.destroy');


// Route frontend/tampilan ======
Route::get('/', [frontendController::class, 'depan'])->name('/');
Route::get('depan', [frontendController::class, 'depan'])->name('depan');
Route::get('/tentang', [frontendController::class, 'tentang'])->name('tentang');
Route::get('/sepak', [frontendController::class, 'sepak'])->name('sepak');
Route::get('/basket', [frontendController::class, 'basket'])->name('basket');
Route::get('/youtube', [frontendController::class, 'youtube'])->name('youtube');


// Route vidio youtube ======

