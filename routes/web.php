<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\WelcomeController;
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\PostController;
use \App\Http\Controllers\PostsController;
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
Auth::routes();

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');
Route::get('/author/{slug}', [PostsController::class, 'byAuthor'])->name('posts.author');
Route::get('/archive/{date}', [PostsController::class, 'byMonth'])->name('posts.archive');
Route::get('/category/{slug}', [PostsController::class, 'byCategory'])->name('posts.category');

Route::get('/post/{slug}', [PostController::class, 'view'])->name('post.view');

Route::get('/home', [HomeController::class, 'index'])->name('home');
