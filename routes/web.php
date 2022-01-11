<?php

use Illuminate\Support\Facades\Route;
// use Illuminate\sepakbolaController;
use App\Http\Controllers\sepakbolaController;
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

// Route Sepak Bola
// Route::get('upload.sepakbola', function () {
//     return view('admin.upload_sepakbola.show');
// });
Route::get('upload.sepakbola', [sepakbolaController::class, 'show'])->name('upload.sepakbola');
Route::get('create.index', [sepakbolaController::class, 'index'])->name('create.index');
Route::get('sepakbola.edit', [sepakbolaController::class, 'edit'])->name('sepakbola.edit');












//Route Bola BAsket
Route::get('upload.basket', function () {
    return view('admin.upload_bolabasket.show');
});
