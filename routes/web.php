<?php

use Illuminate\Support\Facades\Route;
// use Illuminate\sepakbolaController;
use App\Http\Controllers\SepakbolaController;
use App\Http\Controllers\BolabasketController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\frontendController;

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
// Route::get('depan', function () {
//     return view('user.index');
// });


// route admin/backend===========
Route::get('backend.dashboard', function () {
    return view('admin.dashboard.index');
});


// route bola basket
Route::get('upload.bolabasket', [BolabasketController::class, 'index'])->name('upload.basket');
Route::get('create.basket', [BolabasketController::class, 'create'])->name('create.basket');
Route::get('bolabasket.edit', [BolabasketController::class, 'edit'])->name('bolabasket.edit');
Route::POST('admin.basket.store', [BolabasketController::class, 'store'])->name('admin.basket.store');






// Route Sepak Bola
Route::get('upload.sepakbola', [SepakbolaController::class, 'index'])->name('upload.sepakbola');
Route::get('create.sepakbola', [SepakbolaController::class, 'create'])->name('create.sepakbola');
Route::get('sepakbola.edit{id}', [SepakbolaController::class, 'edit'])->name('sepakbola.edit');
Route::POST('admin.sepakbola.store', [SepakbolaController::class, 'store'])->name('admin.sepakbola.store');
Route::POST('/sepakbola/update/{id}',[SepakbolaController::class, 'update'])->name('sepakbola.update');




// Route frontend/tampilan ======
// Route::get('/', function () {
//     return view('frontend.halaman-utama.index');
// });

Route::get('/', [frontendController::class, 'index'])->name('/');
Route::get('depan', [frontendController::class, 'depan'])->name('depan');

