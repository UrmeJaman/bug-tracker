<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use  App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use  App\Http\Controllers\UsersController;
use  App\Http\Controllers\ProjectsController;
use  App\Http\Controllers\BuglistsController;

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
//Route::auth();
//Auth::routes();
//Route::auth();
Route::get('/', function () {
    return view('auth.login');
});
Route::get('/login', [LoginController::class, 'index']);
Auth::routes();
//Route::auth();
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::resource('pages',PagesController::class);
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('users',UsersController::class);
Route::resource('projects',ProjectsController::class);
Route::resource('buglists',BuglistsController::class);
Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile']);