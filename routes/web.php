<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\EtudiantController ;
use App\Http\Controllers\CustomAuthController ;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\FileController;
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

/* HOME */
Route::get('/', [EtudiantController::class, 'home'])->name('home');
Route::get('home', [EtudiantController::class, 'home'])->name('home');


/* ÉTUDIANTS */
Route::get('etudiants', [EtudiantController::class, 'index'])->name('index')->middleware('auth');
Route::get('etudiant/{etudiant}', [EtudiantController::class, 'show'])->name('etudiant.show')->middleware('auth');
Route::get('etudiant-create', [EtudiantController::class, 'create'])->name('etudiant.create')->middleware('auth');
Route::post('etudiant-create', [EtudiantController::class, 'store'])->name('etudiant.store')->middleware('auth');
Route::get('etudiant-edit/{etudiant}', [EtudiantController::class, 'edit'])->name('etudiant.edit')->middleware('auth');
Route::put('etudiant-edit/{etudiant}', [EtudiantController::class, 'update']);
Route::delete('etudiant-edit/{etudiant}', [EtudiantController::class, 'destroy']);


/* BLOG */
Route::get('blog', [BlogController::class, 'index'])->name('blog.index')->middleware('auth');
Route::get('blog/{blog}', [BlogController::class, 'show'])->name('blog.show')->middleware('auth');
Route::get('blog-create', [BlogController::class, 'create'])->name('blog.create')->middleware('auth');
Route::post('blog-create', [BlogController::class, 'store'])->name('blog.store')->middleware('auth');
Route::get('blog-edit/{blog}', [BlogController::class, 'edit'])->name('blog.edit')->middleware('auth');
Route::put('blog-edit/{blog}', [BlogController::class, 'update'])->middleware('auth');
Route::delete('blog-edit/{blog}', [BlogController::class, 'destroy'])->middleware('auth');
Route::get('blog-user/{user}', [BlogController::class, 'myblogs'])->name('blog.user')->middleware('auth');


/* FICHIERS */
Route::get('file-upload', [FileController::class, 'index'])->name('file.index')->middleware('auth');
Route::get('file-create', [FileController::class, 'create'])->name('file.create')->middleware('auth');
Route::post('file-create', [FileController::class, 'store'])->name('file.create')->middleware('auth');
Route::get('file/{file}', [FileController::class, 'show'])->name('file.show')->middleware('auth');
Route::get('file-edit/{file}', [FileController::class, 'edit'])->name('file.edit')->middleware('auth');
Route::put('file-edit/{file}', [FileController::class, 'update'])->middleware('auth');
Route::delete('file-edit/{file}', [FileController::class, 'destroy'])->middleware('auth');


/* AUTH */
Route::get('registration', [CustomAuthController::class, 'create'])->name('auth.create');
Route::post('registration', [CustomAuthController::class, 'store'])->name('auth.store');
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('login', [CustomAuthController::class, 'authentication'])->name('user.auth');
Route::get('logout', [CustomAuthController::class, 'logout'])->name('logout');
Route::get('new-password', [CustomAuthController::class, 'forgotPassword'])->name('new.pass');
Route::put('new-password', [CustomAuthController::class, 'updateNewPassword'])->name('new.pass');


/* LANGUE */
Route::get('/lang/{locale}', [LocalizationController::class, 'index'])->name('lang');



