<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\UserController;
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
Route::get('/home', [MainController::class, 'home'])->name('home');
Route::get('/users', [UserController::class, 'index'])->name('user.list');
Route::get('/users/jsonIndex', [UserController::class, 'jsonIndex'])->name('user.jsonIndex');
Route::get('/users/{user}', [UserController::class, 'show'])->name('user.show');
Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::patch('/users/{user}',[UserController::class, 'update'])->name('user.update');
Route::delete('/users/{user}',[UserController::class, 'destroy'])->name('user.destroy');
Route::post('/users/{user}/avatar',[UserController::class, 'storeAvatar'])->name('user.avatar.store');


Route::get('/language/{lang}', [MainController::class, 'language'])->name('language');
/*



Route::get('/home', function () {
    return redirect('/index');
})->name('home');

require __DIR__ . '/auth.php';

Route::group(['prefix' => '/'], function () {
    Route::get('', [RoutingController::class, 'index'])->name('root');
    Route::get('language/{lang}', [RoutingController::class, 'language'])->name('language');
    Route::get('{first}/{second}/{third}', [RoutingController::class, 'thirdLevel'])->name('third');
    Route::get('{first}/{second}', [RoutingController::class, 'secondLevel'])->name('second');
    Route::get('{any}', [RoutingController::class, 'root'])->name('any');
});
*/

