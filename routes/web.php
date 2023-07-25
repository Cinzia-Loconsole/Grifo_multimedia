<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;



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

// PUBLIC CONTROLLER
Route::get('/', [PublicController::class,'home'])->name('home');

// ARTICLE CONTROLLER
Route::get('/create-article', [ArticleController::class, 'create'])->name('createArticle');

Route::get('/show-article/{article}', [ArticleController::class, 'show'])->name('showArticle');

Route::get('/index-article', [ArticleController::class, 'index'])->name('indexArticle');

Route::post('/store-article',[ArticleController::class,'store'])->name('storeArticle');