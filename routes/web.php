<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FilmsController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\TheatersController;
use App\Http\Controllers\TheaterSeatController;

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

Route::get('/register', [UserController::class, 'register'])->name('register')->middleware('guest');
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::get('/home', [UserController::class, 'home'])->name('home')->middleware('auth');

Route::post('/register', [UserController::class, 'registerProcess'])->name('registerProcess');
Route::post('/login', [UserController::class, 'loginProcess'])->name('loginProcess');
Route::get('/logout', [UserController::class, 'logout'])->name('logoutProcess');

Route::get('/', [MovieController::class,  'movie'])->name('movie');
Route::get('/payment', [MovieController::class, 'payment'])->name('payment');
Route::get('/dashboard', [MovieController::class, 'dashboard'])->name('dashboard');
Route::get('/details/{id}', [MovieController::class, 'details'])->name('details');

Route::get('/films', [FilmsController::class, 'index'])->name('films.index');
Route::get('/films/create', [FilmsController::class, 'create'])->name('films.create');
Route::post('/films/store', [FilmsController::class,'store'])->name('films.store');

Route::get('/theaters', [TheatersController::class, 'index'])->name('theaters.index');
Route::get('/theaters/createTheaters', [TheatersController::class, 'create'])->name('theaters.create');
Route::post('/theaters/store', [TheatersController::class,'store'])->name('theaters.store');

Route::get('/seats', [TheaterSeatController::class, 'seats'])->name('seats.theaterSeat');
Route::get('/films/{id}/edit', [FilmsController::class, 'edit']);
Route::put('/films/{id}/update', [FilmsController::class, 'update']);
Route::get('/films/{id}/delete', [FilmsController::class, 'destroy']);

Route::get('/MaturityRating', [MaturityRatingController::class,'index'])->name('maturity.index');
Route::get('/MaturityRating/create', [MaturityRatingController::class,'create'])->name('maturity.create');
Route::post('/MaturityRating/store', [MaturityRatingController::class,'store'])->name('maturity.store');
Route::get('/MaturityRating/{id}/edit', [MaturityRatingController::class,'edit']);
Route::put('/MaturityRating/{id}/update', [MaturityRatingController::class,'update']);
Route::get('/MaturityRating/{id}/delete', [MaturityRatingController::class,'destroy']);

Route::get('/FilmStatus', [FilmStatusController::class,'index'])->name('filmstatus.index');
Route::get('/FilmStatus/create', [FilmStatusController::class,'create'])->name('filmstatus.create');
Route::post('/FilmStatus/store', [FilmStatusController::class,'store'])->name('filmstatus.store');
Route::get('/FilmStatus/{id}/edit', [FilmStatusController::class,'edit']);
Route::put('/FilmStatus/{id}/update', [FilmStatusController::class,'update']);
Route::get('/FilmStatus/{id}/delete', [FilmStatusController::class,'destroy']);
