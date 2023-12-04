<?php

use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can reg ister web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [UserController::class, 'register'])->name('register')->middleware('guest');
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::get('/home', [UserController::class, 'home'])->name('home')->middleware('auth');

Route::post('/register', [UserController::class, 'registerProcess'])->name('registerProcess');
Route::post('/login', [UserController::class, 'loginProcess'])->name('loginProcess');
Route::get('/logout', [UserController::class, 'logout'])->name('logoutProcess');

Route::get('/movie', [MovieController::class, 'movie'])->name('movie');
Route::get('/payment', [MovieController::class, 'payment'])->name('payment');
Route::get('/dashboard', [MovieController::class, 'dashboard'])->name('dashboard');
