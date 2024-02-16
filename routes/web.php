<?php

use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\FrontendController::class, 'index']);
Route::get('/detail-artikel/{slug}', [App\Http\Controllers\FrontendController::class, 'detail'])->name('detail-artikel');


Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
Route::resource('kategori', App\Http\Controllers\KategoriController::class);
Route::resource('artikel', App\Http\Controllers\ArtikelController::class);
Route::resource('playlist', App\Http\Controllers\PlaylistController::class);
Route::resource('materi', App\Http\Controllers\MateriController::class);
Route::resource('slide', App\Http\Controllers\SlideController::class);
Route::resource('iklan', App\Http\Controllers\IklanController::class);
