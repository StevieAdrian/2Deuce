<?php

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

Route::post('register', [UserController::class, 'registerProcess']) ->name('register');

Route::get('/', function() {
    return view('login');
}) ->name('loginPage');

Route::get('register', function () {
    // return view('welcome');
    return view('register');
}) ->name('registerPage');
