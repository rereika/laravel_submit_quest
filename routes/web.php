<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TagController;

// 既存のルート定義
Route::get('/', [HomeController::class, 'index'])->name('home');

// 記事関連のルート
Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/article/{id}', [ArticleController::class, 'show'])->name('articles.show');
Route::post('/article', [ArticleController::class, 'store'])->name('articles.store');
Route::get('/editor', [AuthController::class, 'createArticle'])->name('createArticle');

// その他のルート定義
Route::get('/profile/{username}', [ProfileController::class, 'show'])->name('profile.show');
Route::get('/login', [AuthController::class, 'showSigninPage'])->name('login');
Route::get('/register', [AuthController::class, 'showSignupPage'])->name('register');
