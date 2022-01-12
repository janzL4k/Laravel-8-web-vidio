<?php

use Illuminate\Support\Facades\Route;
// use Illuminate\sepakbolaController;
use App\Http\Controllers\SepakbolaController;
use App\Http\Controllers\BolabasketController;
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

// Route frontend/tampilan ======
Route::get('/', function () {
    return view('frontend.halaman-utama.index');
});

// route admin/backend===========
Route::get('backend.dashboard', function () {
    return view('admin.dashboard.index');
});


// route bola basket
Route::get('upload.bolabasket', [BolabasketController::class, 'index'])->name('upload.basket');
Route::get('create.basket', [BolabasketController::class, 'create'])->name('create.basket');
Route::get('bolabasket.edit', [BolabasketController::class, 'edit'])->name('bolabasket.edit');


// Route Sepak Bola
// Route::get('upload.sepakbola', function () {
//     return view('admin.upload_sepakbola.show');s
// });
Route::get('upload.sepakbola', [SepakbolaController::class, 'index'])->name('upload.sepakbola');
Route::get('create.sepakbola', [SepakbolaController::class, 'create'])->name('create.sepakbola');
Route::get('sepakbola.edit', [SepakbolaController::class, 'edit'])->name('sepakbola.edit');




