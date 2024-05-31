<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\TagController;

Route::get('/', function () {
    return view('conduit.home');
});

// Route::get('/editor', function () {
//     return view('conduit.editor');
// });

Route::get('/index', function () {
    return view('conduit.index');
});

Route::get('/post', function () {
    return view('conduit.post');
});

Route::get('/login', [AuthController::class, 'showSigninPage'])->name('login');
Route::get('/register', [AuthController::class, 'showSignupPage'])->name('register');

Route::get('/editor',[AuthController::class, 'createArticle'])->name('createArticle');

Route::get('/profile/{username}', [ProfileController::class, 'show'])->name('profile.show');

Route::get('/article/how-to-build-webapps-that-scale',[AuthController::class,'viewArticle'])->name('viewArticle');
