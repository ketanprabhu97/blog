<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostLikeController;
use App\Http\Controllers\UserPostController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Post\PostsController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\ProfileController;
use App\Http\Controllers\Auth\RegisterController;

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

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register');

Route::get('/users/{user:fname}/psots', [UserPostController::class, 'index'])->name('users.posts');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('login');

Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

Route::get('/posts', [PostsController::class, 'index'])->name('posts');
Route::get('/posts/{post:title}', [PostsController::class, 'show'])->name('posts.show');
Route::post('/posts', [PostsController::class, 'store'])->name('posts');
Route::delete('/posts/{post}', [PostsController::class, 'destroy'])->name('posts.destroy');

Route::post('/posts/{post}/likes', [PostLikeController::class, 'store'])->name('posts.likes');
Route::delete('/posts/{post}/likes', [PostLikeController::class, 'destroy'])->name('posts.likes');

Route::get('/', function () {
    return view('layout.app');
})->name('home');
