<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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

//Index Page
Route::get('/', function () {
    return redirect('/login');
})->middleware('guest');

//Login Page
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'store'])->middleware('guest');

//Logout
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');

//Registration Page
// Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
// Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');

//Dasbhoard Page
Route::get('/dashboard', function () {
    return view('dashboard.user.dashboard');
})->middleware('auth');

//Dashboard Menu
Route::resource('/dashboard/user', PostController::class)->except(['show','destroy','edit','update'])->middleware('auth');
Route::get('/dashboard/user/{post:id}', [PostController::class, 'show'])->middleware('auth');


// Route::delete('/dashboard/manage/{post:id}', [PostController::class, 'destroy'])->middleware('auth');
// Route::get('/dashboard/manage/{post:id}/edit', [PostController::class, 'edit'])->middleware('auth');
// Route::put('/dashboard/manage/{post:id}', [PostController::class, 'update'])->middleware('auth');