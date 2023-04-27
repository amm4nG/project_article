<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PublicArtikelController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', function () {
    return view('admin.login');
})->name('login')->middleware('guest');

// Route::get('articles', [PublicArtikelController::class, 'view'])->middleware('guest');
Route::resource('articles', PublicArtikelController::class)->middleware('guest');

Route::post('validasi', [LoginController::class, 'validasi'])->name('validasi');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');
Route::resource('home', HomeController::class)->middleware('auth');
Route::resource('new', ArticleController::class)->middleware('auth');