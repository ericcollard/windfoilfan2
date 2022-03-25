<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PostCategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\StatisticController;
use App\Http\Controllers\TechnicaldataController;
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
Route::get('/devices/create', [DeviceController::class, 'create'])->name('device.create');
Route::get('/devices/{category}',[DeviceController::class, 'category'])->name('device.category');
Route::get('/devices/{category}/{device}',[DeviceController::class, 'show'])->name('device.show');
Route::get('/devices/{category}/{device}/edit', [DeviceController::class, 'edit'])->name('device.edit');
Route::patch('/devices/{category}/{device}',[DeviceController::class, 'update'])->name('device.update');
Route::post('/devices',[DeviceController::class, 'store'])->name('device.store');
Route::delete('/devices/{category}/{device}',[DeviceController::class, 'destroy'])->name('device.destroy');

Route::get('/technicaldatas',[TechnicaldataController::class, 'index'])->name('technicaldata.index');
Route::get('technicaldatas/attributeChart/{attribute}', [TechnicaldataController::class, 'attributeChart'])->name('technicaldatas.attributeChart');
Route::get('technicaldatas/devicedata/{device}', [TechnicaldataController::class, 'devicedata'])->name('technicaldatas.devicedata');
Route::get('/technicaldatas/category/{category}',[TechnicaldataController::class, 'category'])->name('technicaldata.category');
Route::get('/technicaldatas/create/{device}', [TechnicaldataController::class, 'create'])->name('technicaldata.create');
Route::get('/technicaldatas/{technicaldata}',[TechnicaldataController::class, 'show'])->name('technicaldata.show');
Route::get('/technicaldatas/{technicaldata}/edit', [TechnicaldataController::class, 'edit'])->name('technicaldata.edit');
Route::patch('/technicaldatas/{technicaldata}',[TechnicaldataController::class, 'update'])->name('technicaldata.update');
Route::delete('/technicaldatas/{technicaldata}',[TechnicaldataController::class, 'destroy'])->name('technicaldata.destroy');
Route::post('/technicaldatas',[TechnicaldataController::class, 'store'])->name('technicaldata.store');
Route::post('/technicaldatas/attributestore',[TechnicaldataController::class, 'attributestore'])->name('technicaldata.attributestore');


Route::get('/reviews/create/{device}', [ReviewController::class, 'create'])->name('review.create');
Route::get('/reviews/{review}/edit', [ReviewController::class, 'edit'])->name('review.edit');
Route::get('/reviews/{referReview}/cite', [ReviewController::class, 'cite'])->name('review.cite');
Route::patch('/reviews/{review}',[ReviewController::class, 'update'])->name('review.update');
Route::post('/reviews',[ReviewController::class, 'store'])->name('review.store');
Route::delete('/reviews/{review}',[ReviewController::class, 'destroy'])->name('review.destroy');

Route::get('/brands',[BrandController::class, 'index'])->name('brand.index');
Route::get('/brands/{brand}/edit', [BrandController::class, 'edit'])->name('brand.edit');
Route::get('/brands/{brand}',[BrandController::class, 'show'])->name('brand.show');
Route::patch('/brands/{brand}',[BrandController::class, 'update'])->name('brand.update');

Route::get('/language/{lang}', [MainController::class, 'language'])->name('language');
Route::get('/statistics', [StatisticController::class, 'index'])->name('statistic.calculate');


Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
