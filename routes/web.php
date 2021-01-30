<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::resource('users', UserController::class);
// Route::get('/profile', [UserController::class, 'show']);
//Route::resource('user', 'UserController');
//Route::resource('user', UserController::class);
// Route::resources([
//     'users' => UserController::class
// ]);
Route::resource('users', UserController::class);
//Route::resource('profile/{user}',UserController::class);
//Route::post('/users', [UserController::class, 'index']);