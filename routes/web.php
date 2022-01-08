<?php

use Illuminate\Support\Facades\Route;

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
Route::get('backend', function () {
    return view('admin.dashboard.index');
});
Route::get('backend', function () {
    return view('admin.dashboard.index');
});

Route::get('backend.dashboard', function () {
    return view('admin.dashboard.index');
});
// 3 route route  admin diataas jgn di ubah lanjutin route backend make controller

