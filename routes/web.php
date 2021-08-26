<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers;

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
    return view('about');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/download', function () {
    $_FILES = public_path()."/download/Resumes.docx";

    $headers = array(
        "Content-Type: application/png",
    );

    return Response::download($_FILES, "Resumes.docx, $headers");

});

// Route::resource('/users', UserController::class);

Route::namespace('App\\Http\\Controllers')->group(function(){
    Route::resources([
        'contact' => 'ContactController'
    ]);
    Route::resources([
        'about' => 'AboutController'
    ]);
    Route::resources([
        'portfolio' => 'PortfolioController'
    ]);
    Route::resources([
        'blog' =>'BlogController'
    ]);
    Route::resources([
        'login' =>'LoginController'
    ]);
});
// Route::get('dashboard', [LoginController::class, 'dashboard']);
// Route::get('login', [LoginController::class, 'index']);
// Route::get('signout', [LoginAuthController::class, 'signOut']);

