<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Models\Books;
use App\Models\User;
use App\Models\Data;

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

Route::get('/', [BookController::class, 'home']);
Route::get('recomend', [BookController::class, 'recomend']);
Route::get('books', [BookController::class, 'books']);
Route::get('komik', [BookController::class, 'komik']);
Route::get('Biografi', [BookController::class, 'Biografi']);

Route::get('/register', [BookController::class, 'register'])->name('register');
Route::post('/register', [BookController::class, 'inputRegister'])->name('register.post');
Route::get('/login', [BookController::class, 'login']);
Route::post('/login', [BookController::class, 'auth'])->name('login.auth');
Route::get('logout', [BookController::class, 'logout']);

Route::get('/admin', [BookController::class, 'admin']);

Route::get('/upload', [BookController::class, 'upload']);
Route::post('/upload', [BookController::class, 'add'])->name('add');
Route::get('input', [BookController::class, 'input']);

Route::get('/daftar', [BookController::class, 'daftar']);
Route::get('/sampul/{id}', [BookController::class, 'sampul']);

Route::get('/category', [BookController::class, 'addcategory'])->name('tambah');

Route::get('/read', [BookController::class, 'read']);
Route::get('/yield', [BookController::class, 'yield']);

Route::get('kategori', [BookController::class, 'kategori']);


