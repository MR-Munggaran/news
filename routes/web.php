<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\SlideController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LoginController;

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

Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('/detail/{slug}', [FrontendController::class, 'detail'])->name('detail');
Route::get('/video/{slug}', [FrontendController::class, 'video'])->name('detailvideo');
Route::get('/kategori/{id}', [FrontendController::class, 'Kategori'])->name('kategorishow');



// Route::get('/home', function () {
//     return view('back.dashboard');
// });

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('actionlogin', [LoginController::class, 'store'])->name('actionlogin');

// Route::get('/dashboard', [DashboardController::class, 'index'])->name('Dashboard')->middleware('auth');
Route::get('logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');



Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
Route::resource('kategori', KategoriController::class)->middleware('auth');
Route::resource('artikel', ArtikelController::class)->middleware('auth');
Route::resource('materi', MateriController::class)->middleware('auth');
Route::resource('slide', SlideController::class)->middleware('auth');
Route::get('profile', [ProfileController::class, 'index'])->name('profile')->middleware('auth');
Route::get('/buat', [ProfileController::class, 'create'])->name('create')->middleware('auth');
