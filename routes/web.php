<?php

use App\Http\Controllers\Auth\CategoryController;
use App\Http\Controllers\Auth\DashboardController;
use App\Http\Controllers\Auth\HomeController;
use App\Http\Controllers\Auth\PostController;
use App\Http\Controllers\Auth\TagController;
use App\Http\Controllers\Site\BlogController;
use App\Http\Controllers\Site\CommentController;
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

Route::get('/logout', function () {
    auth()->logout();
    // return view('welcome');
});

Auth::routes([
    // 'register' => false
]);


Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

Route::resource('auth/posts', PostController::class);
Route::get('auth/categories', [CategoryController::class, 'openCategoriesPage'])->name('auth.categories');
Route::get('auth/tags', [TagController::class, 'openTagsPage'])->name('auth.tags');


Route::get('/', [BlogController::class, 'index'])->name('home');
Route::get('single-blog/{id}', [BlogController::class, 'openSingleBlog'])->name('single-blog');

Route::post('post/comment/{postId}', [CommentController::class, 'postComment'])->name('post.comment')->middleware('auth');
Route::post('comment/reply/{commentId}', [CommentController::class, 'postComment'])->name('comment.reply');