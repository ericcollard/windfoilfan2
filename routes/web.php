<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\PostCategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DeviceController;
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
//Route::redirect('/home', '/index');

require __DIR__ . '/auth.php';

Route::get('/', [MainController::class, 'landing'])->name('landing');
Route::get('/home', [MainController::class, 'dashboard'])->name('home');
Route::get('/users', [UserController::class, 'index'])->name('user.list')->middleware('auth');
Route::get('/users/jsonIndex', [UserController::class, 'jsonIndex'])->name('user.jsonIndex')->middleware('auth');
Route::get('/users/{user}', [UserController::class, 'show'])->name('user.show');
Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('user.edit')->middleware('auth');
Route::patch('/users/{user}',[UserController::class, 'update'])->name('user.update');
Route::delete('/users/{user}',[UserController::class, 'destroy'])->name('user.destroy');
Route::post('/users/{user}/avatar',[UserController::class, 'storeAvatar'])->name('user.avatar.store');

Route::get('/posts', [PostController::class, 'categories'])->name('post.categories');
Route::get('/posts/extract', [PostController::class, 'extract'])->name('post.extract');
Route::get('/posts/create', [PostController::class, 'create'])->name('post.create');
Route::get('/posts/{postCategory}', [PostController::class, 'postCategory'])->name('post.postCategory');
Route::get('/posts/{postCategory}/{post}', [PostController::class, 'show'])->name('post.show');
Route::get('/posts/{postCategory}/{post}/edit', [PostController::class, 'edit'])->name('post.edit');
Route::patch('/posts/{postCategory}/{post}',[PostController::class, 'update'])->name('post.update');
Route::delete('/posts/{postCategory}/{post}',[PostController::class, 'destroy'])->name('post.destroy');
Route::post('/posts',[PostController::class, 'store'])->name('post.store');

Route::get('/devices',[DeviceController::class, 'categories'])->name('device.categories');
Route::get('/devices/{category}',[DeviceController::class, 'category'])->name('device.category');
Route::get('/devices/{category}/{device}',[DeviceController::class, 'show'])->name('device.show');

Route::get('/language/{lang}', [MainController::class, 'language'])->name('language');

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
